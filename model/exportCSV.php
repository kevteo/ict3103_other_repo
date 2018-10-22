<?php
require_once("./Model.php");
$model = Model::getInstance(); // Instantiate Object

$model->downloadBackup();