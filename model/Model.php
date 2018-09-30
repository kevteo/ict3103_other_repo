<?php
require_once('Transaction.php');
require_once('User.php');
session_start();

//TEST CODE START (REMOVE THIS SECTION BEFORE SUBMITTING) ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
//
//Visit   localhost/ict3104-team07-2018/model/Model.php   to test the commands below (if using netbeans, CTRL / to uncomment)
//
$model = Model::getInstance(); // Instantiate Object
// Example 0 - Only run this function ONCE to insert data to database if necessary
//$model->insertData();

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
// $user = new User("manager", "managerName", "s9876543c", "98765432", "email@hotmail.com", $username = "abc", $password = "abc");
// if ($model->register($user)) { echo "Registration Successful!"; }

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

    private function performQuery($sql) {
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
        $sql = "SELECT * FROM User WHERE username = '$username' AND password = '$password'";
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
		
		//var_dump($user);
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
        $sql = "SELECT * FROM User WHERE username = '$user->username' OR nric = '$user->nric'";
        $result = $this->performQuery($sql);
        if ($result == null) { return null; }
        if (mysqli_num_rows($result) == 0) {
            // TO-DO Confirm if need to generate user/pass
            //$user->username = "?";
            //$user->password = "?";
            
            $sql = "INSERT INTO User VALUES (NULL, '$user->username', '$user->password', '$user->role', '$user->name', '$user->nric', '$user->mobileNumber', '$user->email','$user->address', '$user->balance', '$user->status', $user->isActive, $user->requestToggleActive, NULL, $user->isTerminated)";
            $result = $this->performQuery($sql);
            return true;
        }
        return false;
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

    public function requestToggleActive($user) {
        // TO-DO Confirm the flow (this function done before or after login? If before login parameters: $username, $password. if after login $parameters: $user object
        // Currently function done assuming it is after login

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
     * 2. false if does not fit criteria
     * 3. null if error inserting
     * 
     * Criteria
     * 1. User must be a manager
     */

    public function setToggleActive($user) {
        if ($user->role == 'manager') {
            $sql = "UPDATE User SET requestToggleActive = 0, isActive = 1 WHERE userID = '$user->userID'";
            $result = $this->performQuery($sql);
            if ($result) { return true; } else { return null; }
        }
        return false;
    }
    
    
    public function modifyProfile($user) {
        // TO-DO find out what can be changed and any criteria?
        $sql = "UPDATE User SET email = '$user->email' WHERE userID = '$user->userID'";
        $result = $this->performQuery($sql);
        if ($result) { return true; } else { return null; }
    }
    
    
    public function getBalance($userID) {
        $sql = "SELECT balance FROM user WHERE userID = '$payeeID'";
        $result = $this->performQuery($sql);
        return mysqli_fetch_row($result)[0];
    }
    
    public function deposit($amount) {
        $user = unserialize($_SESSION['user']);
        $user->balance += abs($amount);
        $_SESSION['user'] = serialize($user);
        
        $sql = "UPDATE User SET balance = '$user->balanace' WHERE userID = '$user->userID'";
        $result = $this->performQuery($sql);
        if ($result) { return true; } else { return null; }
    }
    
    
    public function withdraw($amount) {
        $user = unserialize($_SESSION['user']);
        $user->balance += (abs($amount) * -1);
        $_SESSION['user'] = serialize($user);
        
        $sql = "UPDATE User SET balance = '$user->balanace' WHERE userID = '$user->userID'";
        $result = $this->performQuery($sql);
        if ($result) { return true; } else { return null; }
    }
    
    
    public function transfer($amount, $payeeID) {
        $user = unserialize($_SESSION['user']);
        $user->balance += abs($amount * -1);
        $_SESSION['user'] = serialize($user);
        
        $sql = "UPDATE User SET balance = '$user->balanace' WHERE userID = '$user->userID'";
        $result = $this->performQuery($sql);
        
        $date = new DateTime();
        $datetime = $date->format('Y-m-d H-i-s');
        $sql = "INSERT INTO Transaction VALUES (NULL, '$amount', '$user->userID', '$payeeID', '$datetime')";
        $result = $this->performQuery($sql);
        
        $sql = "SELECT balance FROM user WHERE userID = '$payeeID'";
        $result = $this->performQuery($sql);
        $payeeBalance = mysqli_fetch_row($result)[0];
        $payeeBalance += abs($amount);
        
        $sql = "UPDATE User SET balance = '$payeeBalance' WHERE userID = '$payeeID'";
        $result = $this->performQuery($sql);
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
        return mysqli_fetch_object($result);
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
    public function approveCustomerAccount($user) {
        if ($user->role == 'manager') {
            $sql = "UPDATE User SET status = 1 WHERE userID = '$user->userID'";
            $result = $this->performQuery($sql);
            if ($result) { return true; } else { return null; }
        }
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
    public function createCustomerAccount($user) {
        if ($user->role == 'admin') {
            $sql = "UPDATE User SET status = 2 WHERE userID = '$user->userID'";
            $result = $this->performQuery($sql);
            if ($result) { return true; } else { return null; }
        }
        return false;
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
        array_push($sqlArray, "INSERT INTO User VALUES (NULL, 'customer1', '123', 'customer', 'customer1', 's9999901c', '97832323', 'kevin9001@live.com','Tampines st 91, Blk999 #09-999, Singapore 520999', '50', '2', TRUE, FALSE, '$currentDate', FALSE)");
        array_push($sqlArray, "INSERT INTO User VALUES (NULL, 'customer2', '123', 'customer', 'customer2', 's9999902c', '97832323', 'leexd1994@gmail.com', 'Jurong st 91, Blk929 #09-929, Singapore 500929','50', '2', TRUE, FALSE, '$currentDate', FALSE)");
        array_push($sqlArray, "INSERT INTO User VALUES (NULL, 'customer3', '123', 'customer', 'customer3', 's9999903c', '97832323', 'jeremy.nogi46@gmail.com', 'Sengkang st 91, Blk829 #09-829, Singapore 510829','50', '2', TRUE, FALSE, '$currentDate', FALSE)");
        array_push($sqlArray, "INSERT INTO User VALUES (NULL, 'customer4', '123', 'customer', 'customer4', 's9999904c', '97832323', 'MissKYH.sg@gmail.com','Seragoon st 95, Blk995 #09-995, Singapore 550995', '50', '2', TRUE, FALSE, '$currentDate', FALSE)");
        array_push($sqlArray, "INSERT INTO User VALUES (NULL, 'customer5', '123', 'customer', 'customer5', 's9999905c', '97832323', 'KheoYanHsia@gmail.com','Bedok st 85, Blk985 #08-985, Singapore 520985', '50', '2', TRUE, FALSE, '$currentDate', FALSE)");
        array_push($sqlArray, "INSERT INTO User VALUES (NULL, 'customer6', '123', 'customer', 'customer6', 's9999906c', '97832323', 'gohchoongiap@gmail.com','Geylang st 81, Blk981 #09-981, Singapore 520981', '50', '2', TRUE, FALSE, '$currentDate', FALSE)");
        array_push($sqlArray, "INSERT INTO User VALUES (NULL, 'customer7', '123', 'customer', 'customer7', 's9999907c', '97832323', 'kwanlamyujoey@gmail.com', 'Yishun st 91, Blk911 #09-911, Singapore 540911','50', '2', TRUE, FALSE, '$currentDate', FALSE)");

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
