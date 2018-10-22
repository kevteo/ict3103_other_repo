<?php
require_once('Transaction.php');
require_once('User.php');
session_start();


// Example 1 - Login and store to session
//$user = $model->login("customer1", "123");
//if ($user) {
//    $user = unserialize($_SESSION['user']);
//    echo $user->name . "<br>";
//    echo $user->userID . "<br>";
//    echo $user->email . "<br>";
//} else {
//    echo "Invalid account!";
//}

// Example 2 - Register
//$user = new User("manager", "managerName", "s9876543c", "98765432", "email@hotmail.com","tampines st91, blk 999 st99, singapore 529999","024-61261-1","Below 2000");
//if ($model->register($user)) { echo "Registration Successful!"; }

// Example 3 - Get List of customers CHOOSE 1 method

//foreach($model->getCustomers() as $customer) {
//    echo $customer->name . "<br>";


//TEST CODE END (REMOVE THIS SECTION BEFORE SUBMITTING)~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~



class Model {
    private static $instance = null;
    private $conn;
    private $host = 'localhost';
    private $username = 'root';
    private $password = '';
    private $dbName = 'mBank';

    /*
     * Singleton to reduce unecessary objects connecting to database
     */

    public static function getInstance() {
        if (self::$instance == null) {
            self::$instance = new Model();
        }
        return self::$instance;
    }

    /*
     * Connect to mBank Database 
     */

    private function __construct() {
        $this->conn = new mysqli($this->host, $this->username, $this->password, $this->dbName);
    }

    /*
     * Perform's the query, else dump error function on screen
     * For troubleshooting/debugging
     */

    public function performQuery($sql) {
        if ($result = mysqli_query($this->conn, $sql)) {
            return $result;
        }
        echo '<pre>';
        echo "There was an error in the function: ";
        var_dump(debug_backtrace()[1]['function']);
        echo '</pre>';
        echo $sql;
        return null;
    }

    /*
     * Returns
     * 1. true object if Username and password exist
     * 2. false if invalid username/password
     * 3. null if error
     * 
     * Stores serialized($user) object in $_SESSION['user']
     */

    public function login($username, $password) {
        $sql = "SELECT * FROM User WHERE username = '$username' AND password = '$password' and isTerminated='0'";
        $result = $this->performQuery($sql);
        if ($result == null) { return null; }

        if ($user = mysqli_fetch_object($result)) {
            $date = new DateTime();
            $datetime = $date->format('Y-m-d H-i-s');
            
            $sql = "UPDATE User SET lastActive = '$datetime' WHERE userID = '$user->userID'";
            $result = $this->performQuery($sql);
            $_SESSION['user'] = serialize($user);
			
            return true;
        }
        return false;
    }

    /*
     * Returns
     * 1. true if successfully register
     * 2. false if does not fit criteria
     * 3. null if error inserting
     * 
     * Critera
     * 1. nric must be unique
     * 2. username must be unique
     */
    public function register($user) {
        // Generate user name 
        $randomUsername = substr(str_shuffle(str_repeat($user->name, 5)), 0, 5);
        $user->username = $randomUsername."".substr($user->nric,2,4);
      
        // Generate password
        $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
        $pass = array(); //remember to declare $pass as an array
        $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
        for ($i = 0; $i < 8; $i++) {
            $n = rand(0, $alphaLength);
            $pass[] = $alphabet[$n];
        }
        $user->password =implode($pass);
        
        // Generate account number
        $numbers = '1234567890';
        $accountNumber = array(); //remember to declare $pass as an array
        $numbersLength = strlen($numbers) - 1; //put the length -1 in cache
        for ($i = 0; $i < 9; $i++) {
            $n = rand(0, $numbersLength);
            $accountNumber[] = $numbers[$n];
        }
        $user->account = implode($accountNumber);

        // Check if username or nric already exist
        $sql = "SELECT * FROM User WHERE username='$user->username' OR  nric = '$user->nric'";
        $result = $this->performQuery($sql);
        if (mysqli_num_rows($result)!=0) { return false; }
        
        // Insert to database
        $sql = "INSERT INTO User VALUES (NULL, '$user->username', '$user->password', '$user->role', '$user->name',
            '$user->nric', '$user->mobileNumber', '$user->email','$user->address', '$user->account', 
            '$user->salary','$user->balance', '$user->status', $user->isActive, $user->requestToggleActive, 
            NULL, $user->isTerminated)";
        $result = $this->performQuery($sql);
        if ($result) { return true; }
        else { return null; }
    }

   

    /*
     * Returns
     * 1. true if succesful requested
     * 2. false if does not fit criteria
     * 3. null if error inserting
     * 
     * Criteria
     * 1. Account must be inactive
     */

    public function requestToggleActive() {
        $userID = unserialize($_SESSION['user'])->userID;
        $sql = "SELECT * FROM User WHERE userID = '$userID'";
        $result = $this->performQuery($sql);
        $user = mysqli_fetch_object($result);

        if ($user->isActive == true) {
            return false;
        }
        $sql = "UPDATE User SET requestToggleActive = 1 WHERE userID = '$user->userID'";
        $result = $this->performQuery($sql);
        if ($result) { return true; } else { return null; }
    }

    /*
     * Returns
     * 1. true if succesfully toggled active
     * 3. null if error inserting
     */

     /*
     requestToggleActive =1 mean customer request
     requestToggleActive =2 mean customer request & manager approve
     When admin approve, requestToggleActive =0 and isActive = 1
     */

    public function getRequestToggleActiveForManager() {
        $sql = "SELECT * FROM User WHERE requestToggleActive=1 and isActive=0  ";
        $result = $this->performQuery($sql);
        $userArray = array();
        while ($user = mysqli_fetch_object($result)) {
            array_push($userArray, $user);
        }
        return json_encode($userArray);
    }

    public function getRequestToggleActiveForAdmin() {
        $sql = "SELECT * FROM User WHERE requestToggleActive=2 and isActive=0  ";
        $result = $this->performQuery($sql);
        $userArray = array();
        while ($user = mysqli_fetch_object($result)) {
            array_push($userArray, $user);
        }
        return json_encode($userArray);
    }

    public function setToggleActiveForManager($userID) {
        $sql = "UPDATE User SET requestToggleActive = 2, isActive = 0 WHERE userID = '$userID'";
        $result = $this->performQuery($sql);
        if ($result) { return true; } else { return null; }
    }


    public function setToggleActiveForAdmin($userID) {
        $sql = "UPDATE User SET requestToggleActive = 0, isActive = 1 WHERE userID = '$userID'";
        $result = $this->performQuery($sql);
        if ($result) { return true; } else { return null; }
    }

    public function setToggleFail($userID) {
        $sql = "UPDATE User SET requestToggleActive = 0, isActive = 0 WHERE userID = '$userID'";
        $result = $this->performQuery($sql);
        if ($result) { return true; } else { return null; }
    }





    
    
    
    public function modifyProfile($userID, $name, $address, $email, $password, $salary) {
        $sql = "UPDATE User SET name = '$name',
        address = '$address',
        email = '$email',
        password = '$password',
        salary = '$salary'
        WHERE userID = '$userID'";

        $result = $this->performQuery($sql);
        if ($result) { return true; } else { return null; }
    }

    public function getProfile() {
        $userID = unserialize($_SESSION['user'])->userID;
        $sql = "SELECT * FROM User WHERE userID = '$userID'";
        
        $result = $this->performQuery($sql);
        return mysqli_fetch_object($result);
    }
    
    
    public function getBalance($userID) {
        $sql = "SELECT balance FROM user WHERE userID = '$userID'";
        $result = $this->performQuery($sql);
        return mysqli_fetch_row($result)[0];
    }
    
    public function deposit($amount) {
		$date = new DateTime();
		$datetime = $date->format('Y-m-d H-i-s');
        $user = unserialize($_SESSION['user']);
		
        $newBalance = $this->getBalance($user->userID) + $amount;
        $posAmount = abs($amount);
		
		// Update Balance
        $sql = "UPDATE User SET balance = '$newBalance' WHERE userID = '$user->userID'";
        $result = $this->performQuery($sql);
        if (!$result) { return null; }
		
		// Log Transaction
		$sql = "INSERT INTO Transaction VALUES (NULL, '$posAmount', '$user->userID', NULL, '$datetime')";
		$result = $this->performQuery($sql);
		if (!$result){ return null; }
		
		return true;
    }
	
    public function withdraw($amount) {
		$date = new DateTime();
		$datetime = $date->format('Y-m-d H-i-s');
        $user = unserialize($_SESSION['user']);
        
        $balance = $this->getBalance($user->userID);
		
		// Check the amount
		if ($balance>=$amount) {
			$newBalance = $balance - $amount;
			$negAmount = abs($amount)*-1; // Force value to be Negative
			
			// Update Balance
			$sql = "UPDATE User SET balance = '$newBalance' WHERE userID = '$user->userID'";
			$result = $this->performQuery($sql);
			if (!$result){ return null; }
			
			// Log Transaction
			$sql = "INSERT INTO Transaction VALUES (NULL, '$negAmount', '$user->userID', NULL, '$datetime')";
			$result = $this->performQuery($sql);
			if (!$result){ return null; }
			
			return true;
		}
		else{
			return false;
		}
    }
    
	/*
	*Please double check this and read the comment 
	*/
    public function transfer($amount, $account) {
        $user = unserialize($_SESSION['user']);
		$date = new DateTime();
		$datetime = $date->format('Y-m-d H-i-s');
		
		// Check if account exist
		$sql = "SELECT * FROM User where account='$account' AND status = 2 AND isTerminated=0";
		$result = $this->performQuery($sql);
        if ($result == null) { return false; }
         
        $row = mysqli_fetch_assoc($result);
        $payeeID = $row['userID'];
        
        //Check if balance enough
        $newBalance = $this->getBalance($user->userID) - abs($amount);
        
        if($newBalance >= 0) {
            // Update Database
            $posAmount = abs($amount);
            $sql = "UPDATE User SET balance = '$newBalance' WHERE userID = '$user->userID'"; 
            $result = $this->performQuery($sql);
            if (!$result) { return false; }
            
            $sql = "INSERT INTO Transaction VALUES (NULL, '$posAmount', '$user->userID', '$payeeID', '$datetime')";
            $result = $this->performQuery($sql);
            
            if (!$result) { return false; }
            
            // Update payee
            $sql = "SELECT balance FROM user WHERE account = '$account'";
            $result = $this->performQuery($sql);
            $payeeBalance = mysqli_fetch_row($result)[0] + abs($amount);
            
            $sql = "UPDATE User SET balance = '$payeeBalance' WHERE account = '$account'";
            $result = $this->performQuery($sql);
            if (!$result) { return false; }
            
            return true;
        }
        else {
            return false;
        }
	}			
		
        
    
        
		

    
    
    public function getCustomers() {
        $sql = "SELECT * FROM User";
        $result = $this->performQuery($sql);
        $userArray = array();
        while ($user = mysqli_fetch_object($result)) {
            array_push($userArray, $user);
        }
        return json_encode($userArray);
    }

    public function getCustomersPending() {
        $sql = "SELECT * FROM User WHERE status = '0'";
        $result = $this->performQuery($sql);
        $userArray = array();
        while ($user = mysqli_fetch_object($result)) {
            array_push($userArray, $user);
        }
        return json_encode($userArray);
    }

    public function getCustomersApproved() {
        $sql = "SELECT * FROM User WHERE status = '1'";
        $result = $this->performQuery($sql);
        $userArray = array();
        while ($user = mysqli_fetch_object($result)) {
            array_push($userArray, $user);
        }
        return json_encode($userArray);
    }

    public function getCustomersCreated() {
        $sql = "SELECT * FROM User WHERE status = '2'";
        $result = $this->performQuery($sql);
        $userArray = array();
        while ($user = mysqli_fetch_object($result)) {
            array_push($userArray, $user);
        }
        return json_encode($userArray);
    }
    
    public function getCustomersActive() {
        $sql = "SELECT * FROM User WHERE isActive = TRUE";
        $result = $this->performQuery($sql);
        $userArray = array();
        while ($user = mysqli_fetch_object($result)) {
            array_push($userArray, $user);
        }
        return json_encode($userArray);
    }

    public function getCustomersInActive() {
        $sql = "SELECT * FROM User WHERE isActive = FALSE";
        $result = $this->performQuery($sql);
        $userArray = array();
        while ($user = mysqli_fetch_object($result)) {
            array_push($userArray, $user);
        }
        return json_encode($userArray);
    }
    
    public function getCustomerDetails($userID) {
        $sql = "SELECT * FROM User WHERE userID = '$userID'";
        $result = $this->performQuery($sql);
        if ($result == null) { return null; }
        return mysqli_fetch_assoc($result);
    }
    
    //manager view pending approve account
    public function viewPendingAccount() {
        $sql = "SELECT nric, name, mobileNumber, email FROM User where status = 0";
        $result = $this->performQuery($sql);
        $userArray = array();
        while ($user = mysqli_fetch_object($result)) {
            array_push($userArray, $user);
        }
        return $userArray;
    }
    
    //manager approve aacount
    public function approveCustomerAccount($userID) {
        $sql = "UPDATE User SET status = 1 WHERE userID = '$userID'";
            $result = $this->performQuery($sql);
            if ($result) { return true; } else { return null; }
        
        return false;
    }
    
    //manager reject account
    public function rejectCustomerAccount($user) {
        //TO-DO send email to the user
        if ($user->role == 'manager') {
            $sql = "UPDATE User SET status = -1 WHERE userID = '$user->userID'";
            $result = $this->performQuery($sql);
            if ($result) { return true; } else { return null; }
        }
	}
	
	//admin create aacount
    public function createCustomerAccount($userID) {
        $sql = "UPDATE User SET status = 2 WHERE userID = '$userID'";
        $result = $this->performQuery($sql);
        if ($result) { return true; } else { return null; }
    
        return false;
    }
    
    //admin set customers inactive if lastActive > 3months
    public function setInactiveCustomers() {
        $date = new DateTime();
        $currentDate = $date->format('Y-m-d H-i-s');
        $sql = "SELECT * FROM User WHERE lastActive <= NOW() - INTERVAL 3 MONTH";
        $result = $this->performQuery($sql);
        while($row = $result->fetch_array(MYSQLI_ASSOC)){
            $a = $row['userID'];
            $sql2 = "UPDATE User SET isActive = 0 WHERE userID = '$a'";
            $result2 = $this->performQuery($sql2);
        }
        return null;
    }
    
    // admin download backup data to csv
    public function downloadBackup()
    {
    //table name
    $db_record = 'User';
    //WHERE query
    $where = 'WHERE status = "2"';
    //filename for export
    $csv_filename = $db_record.'_'.date('Y-m-d').'.csv';
    //database variables
    //empty variable to be filled with export data
    $csv_export = '';
    // query to get data from database
    $query = mysqli_query($this->conn, "SELECT * FROM ".$db_record." ".$where);

    //if include where example 
    //$query = mysqli_query($this->conn, "SELECT * FROM ".$db_record." ".$where);

    $field = mysqli_field_count($this->conn);
    // create line with field names
    for($i = 0; $i < $field; $i++) {
        $csv_export.= mysqli_fetch_field_direct($query, $i)->name.',';
        }
    // newline 
        $csv_export.= '
    ';
    // loop through database query and fill export variable
    while($row = mysqli_fetch_array($query)) {
        // create line with field values
        for($i = 0; $i < $field; $i++) {
            $csv_export.= ''.$row[mysqli_fetch_field_direct($query, $i)->name].',';
        }
        $csv_export.= '
    ';
        }
    // Export the data and prompt a csv file for download
    header("Content-type: text/x-csv");
    header("Content-Disposition: attachment; filename=".$csv_filename."");
    echo($csv_export);
    }

    /*
     * Run to this method to insert data to database
     * If changes are made to database, modify if necessary
     * Type command in phpmyadmin if Transaction table rows are not appearing, DELETE all the User rows THEN insert this sql ALTER TABLE user AUTO_INCREMENT = 1
     */
    public function insertData() {
        $sqlArray = array();
        $date = new DateTime();
        $currentDate = $date->format('Y-m-d H-i-s');

        // User accounts
        array_push($sqlArray, "INSERT INTO User VALUES (NULL, 'customer1', '123', 'customer', 'customer1', 's9999901c', '97832323', 'kevin9001@live.com','Tampines st 91, Blk999 #09-999, Singapore 520999','024-61263-1' ,'50', '2', TRUE, FALSE, '$currentDate', FALSE)");
        array_push($sqlArray, "INSERT INTO User VALUES (NULL, 'customer2', '123', 'customer', 'customer2', 's9999902c', '97832323', 'leexd1994@gmail.com', 'Jurong st 91, Blk929 #09-929, Singapore 500929','024-61263-2','50', '2', TRUE, FALSE, '$currentDate', FALSE)");
        array_push($sqlArray, "INSERT INTO User VALUES (NULL, 'customer3', '123', 'customer', 'customer3', 's9999903c', '97832323', 'jeremy.nogi46@gmail.com', 'Sengkang st 91, Blk829 #09-829, Singapore 510829','024-61263-3','50', '2', TRUE, FALSE, '$currentDate', FALSE)");
        array_push($sqlArray, "INSERT INTO User VALUES (NULL, 'customer4', '123', 'customer', 'customer4', 's9999904c', '97832323', 'MissKYH.sg@gmail.com','Seragoon st 95, Blk995 #09-995, Singapore 550995', '024-61263-4','50', '2', TRUE, FALSE, '$currentDate', FALSE)");
        array_push($sqlArray, "INSERT INTO User VALUES (NULL, 'customer5', '123', 'customer', 'customer5', 's9999905c', '97832323', 'KheoYanHsia@gmail.com','Bedok st 85, Blk985 #08-985, Singapore 520985', '024-61263-5','50', '2', TRUE, FALSE, '$currentDate', FALSE)");
        array_push($sqlArray, "INSERT INTO User VALUES (NULL, 'customer6', '123', 'customer', 'customer6', 's9999906c', '97832323', 'gohchoongiap@gmail.com','Geylang st 81, Blk981 #09-981, Singapore 520981','024-61263-6', '50', '2', TRUE, FALSE, '$currentDate', FALSE)");
        array_push($sqlArray, "INSERT INTO User VALUES (NULL, 'customer7', '123', 'customer', 'customer7', 's9999907c', '97832323', 'kwanlamyujoey@gmail.com', 'Yishun st 91, Blk911 #09-911, Singapore 540911','024-61263-7','50', '2', TRUE, FALSE, '$currentDate', FALSE)");

        array_push($sqlArray, "INSERT INTO User VALUES (NULL, 'manager1', '123', 'manager', 'manager1', 's9999908c', '97832323', 'kevin9001@live.com', 'Orchard st 32, Blk32 #02-32, Singapore 520132','50', '2', TRUE, FALSE, '$currentDate', FALSE)");
        array_push($sqlArray, "INSERT INTO User VALUES (NULL, 'manager2', '123', 'manager', 'manager2', 's9999909c', '97832323', 'kwanlamyujoey@gmail.com', '50', '2', TRUE, FALSE, '$currentDate', FALSE)");

        array_push($sqlArray, "INSERT INTO User VALUES (NULL, 'admin1', '123', 'admin', 'admin1', 's9999910c', '97832323', 'kevin9001@live.com','Orchard st 32, Blk32 #02-32, Singapore 520132', '50', '2', TRUE, FALSE, '$currentDate', FALSE)");
        array_push($sqlArray, "INSERT INTO User VALUES (NULL, 'admin2', '123', 'admin', 'admin2', 's9999911c', '97832323', 'leexd1994@gmail.com','Novena st 11, Blk11 #09-11, Singapore 520111', '50', '2', TRUE, FALSE, '$currentDate', FALSE)");

        // Deposit
        array_push($sqlArray, "INSERT INTO Transaction VALUES (NULL, 30, 1, NULL, '$currentDate')");
        array_push($sqlArray, "INSERT INTO Transaction VALUES (NULL, 30, 2, NULL, '$currentDate')");
        array_push($sqlArray, "INSERT INTO Transaction VALUES (NULL, 30, 3, NULL, '$currentDate')");
        array_push($sqlArray, "INSERT INTO Transaction VALUES (NULL, 30, 4, NULL, '$currentDate')");
        array_push($sqlArray, "INSERT INTO Transaction VALUES (NULL, 30, 5, NULL, '$currentDate')");
        array_push($sqlArray, "INSERT INTO Transaction VALUES (NULL, 30, 6, NULL, '$currentDate')");
        array_push($sqlArray, "INSERT INTO Transaction VALUES (NULL, 30, 7, NULL, '$currentDate')");

        // Withdraw
        array_push($sqlArray, "INSERT INTO Transaction VALUES (NULL, -25, 1, NULL, '$currentDate')");
        array_push($sqlArray, "INSERT INTO Transaction VALUES (NULL, -25, 2, NULL, '$currentDate')");
        array_push($sqlArray, "INSERT INTO Transaction VALUES (NULL, -25, 3, NULL, '$currentDate')");
        array_push($sqlArray, "INSERT INTO Transaction VALUES (NULL, -25, 4, NULL, '$currentDate')");
        array_push($sqlArray, "INSERT INTO Transaction VALUES (NULL, -25, 5, NULL, '$currentDate')");
        array_push($sqlArray, "INSERT INTO Transaction VALUES (NULL, -25, 6, NULL, '$currentDate')");
        array_push($sqlArray, "INSERT INTO Transaction VALUES (NULL, -25, 7, NULL, '$currentDate')");

        // Transfer
        array_push($sqlArray, "INSERT INTO Transaction VALUES (NULL, 5, 1, 7, '$currentDate')");
        array_push($sqlArray, "INSERT INTO Transaction VALUES (NULL, 5, 2, 7, '$currentDate')");
        array_push($sqlArray, "INSERT INTO Transaction VALUES (NULL, 5, 3, 5, '$currentDate')");
        array_push($sqlArray, "INSERT INTO Transaction VALUES (NULL, 5, 4, 4, '$currentDate')");
        array_push($sqlArray, "INSERT INTO Transaction VALUES (NULL, 5, 5, 3, '$currentDate')");
        array_push($sqlArray, "INSERT INTO Transaction VALUES (NULL, 5, 6, 2, '$currentDate')");
        array_push($sqlArray, "INSERT INTO Transaction VALUES (NULL, 5, 7, 1, '$currentDate')");

        foreach ($sqlArray as $sql) {
            $this->conn->query($sql);
        }
    }

}

