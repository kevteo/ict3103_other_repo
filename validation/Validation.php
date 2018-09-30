<?php 

	/*
	*
	* ValidateLogin Function: 
	* 1. Redirect url
	* 2. Set cookie if user click "Remember me"
	* Git Commit 1 : Login Backend
	*/
	
	function validateLogin($model,$username, $password){
		
		$user = $model->login($username, $password);
		
		//var_dump($user);
		
		if ($user) {
			$user = unserialize($_SESSION['user']);
			$url = "";
			
			//Role URL
			if(strcasecmp($user->role, "customer") == 0){
				$url ="Location: ../source_customer/customerdashboard.php";
			
			}
			else if (strcasecmp($user->role, "admin")==0){
				$url ="Location: ../source_admin/admindashboard.php";
			
			}
			
			else if (strcasecmp($user->role, "manager")==0){
				$url ="Location: ../source_manager/managerdashboard.php";
				
			}
			
			else{
				echo "Something went wrong";
			}
			
			//setCookie
			if(isset($_POST['remember'])){
				echo "user click remember <br>";
				setcookie("username", $username, time() +(60*60*24 *365), "/"); //30 DAY
				setcookie("password", $password, time() +(60*60*24 *365), "/"); //30 DAY
			}
			
			//echo $url;
			header($url);
			
		}
	}
	
	

	
	

?>