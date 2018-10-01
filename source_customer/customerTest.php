<?php 

/* This web page mainly testing backend purpose*/
require_once('../model/Model.php');
$model = Model::getInstance();

//Backend
	$transfer = $model->transfer(99.9, "024-61263-7");//True false
	$withdraw = $model->withdraw (420); //True False
	$deposit =$model->deposit (420);
	
	echo $model-> getBalance(1);

	

	
?>