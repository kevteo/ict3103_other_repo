<?php
	require_once('User.php');
	require_once('Model.php');
	$model = Model::getInstance();
	
		//$myuser = array('name' => 'Jo', 'nric' => 's1231234D', 'mobileNumber' => '98765432', 'username' => 'username234', 'password1' => 'thisispassword','role'=> 'customer', 'email'=>'thisisaemail.com','address' => 'THIS IS ADDRESS', 'account' => "123-32132-4",'salary'=>'>2000', 'balance' => '0', 'status1' => '0','isActive' => '1', 'requestToggleActive' => '1', 'isTerminated' => '0');
		//$Jsonuser = json_encode($myuser);
		$Jsonuser = $_POST['user'];
		$user = json_decode($Jsonuser);
		//generate user name 
		$randomUsername = substr(str_shuffle(str_repeat($user->name, 5)), 0, 5);
		$user->username = $randomUsername."".substr($user->nric,2,4);
				
		//generate password
		$alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
		$pass = array(); //remember to declare $pass as an array
		$alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
		for ($i = 0; $i < 8; $i++) {
			$n = rand(0, $alphaLength);
			$pass[] = $alphabet[$n];
		}
		
		$user->password =implode($pass);
		
		
		//Database check if exist
		
        $sql = "SELECT * FROM User WHERE username='$user->username' or  nric = '$user->nric'";
        $result = $model->performQuery($sql);
        if (mysqli_num_rows($result)==0) {
			//echo "new nric or username";
			
			//if not exist - database
			if (mysqli_num_rows($result) == 0) {
				$sql = "INSERT INTO User VALUES (NULL, '$user->username', '$user->password1', '$user->role', '$user->name',
				'$user->nric', '$user->mobileNumber', '$user->email','$user->address', '$user->account', 
				'$user->salary','$user->balance', '$user->status1', $user->isActive, $user->requestToggleActive, 
				NULL, $user->isTerminated)";
				
				$result = $model->performQuery($sql);
				
				if (!$result){
					//echo "<br><br>insert query fail ";
					echo "Failure";
					return false; 
				}else{
					//echo "<br><br>pass";
					echo "Working";
					return true;
				}
			}
		
		}
		else{
			echo "Existed Account ";
			echo "Failure";
			return false;
		}
		
	

?>