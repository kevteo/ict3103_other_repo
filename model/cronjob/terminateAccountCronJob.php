<!-- Run Everyday -->

<?php
require_once("../Model.php");
$model = Model::getInstance();

$sql = "UPDATE user SET isTerminated = 1 WHERE createDate <= NOW() - INTERVAL 1 MONTH AND balance < 1000";
$result = $model->performQuery($sql);

$date = new DateTime();
$currentDate = $date->format('Y-m-d H-i-s');
?>

