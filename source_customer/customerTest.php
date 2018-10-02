<?php 

/* This web page mainly testing backend purpose*/
require_once('../model/Model.php');
$model = Model::getInstance();

//Backend
	$transfer = $model->transfer(2000, "024-61263-7");//True false
	$withdraw = $model->withdraw (420); //True False
	$deposit =$model->deposit (420);
	

	//register
	$registeruser = new User("manager", "Airin Song", "s9576541c", "98765432", "email@hotmail.com","tampines st91, blk 999 st99, singapore 529999","024-61261-1","Below 2000");
	
	$register = $model->register($registeruser);
	if($register){
		echo "pass";
	}
	else{
		echo "fail";
	}
	
	
	//random username
	function random_username($string) {
	$pattern = " ";
	$s = substr(str_shuffle(str_repeat($string, 5)), 0, 5);

	return $s;
}

	

	
?>