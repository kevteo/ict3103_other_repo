<?php
	
	require_once('../model/Model.php');
	$model = Model::getInstance();

		$Jsonuser = $_POST['user'];
		$user = json_decode($Jsonuser);
		
		$model->register($user);

?>