<?php
include("../source_include/header.php");
require_once('../model/Model.php');
$model = Model::getInstance();
$model->createCustomerAccount($_GET['user']);
include("../source_include/footer.php");

?>