<?php
require_once("../Model.php");
$model = Model::getInstance();

// Run on first day every month


// Compound Interest
$sql = "SELECT * FROM user";
$result = $model->performQuery($sql);

while ($user = mysqli_fetch_object($result)) {
    if ($user->monthStartBalance >= 1000) {
        $interest = $user->monthMinBalance * 0.001;

        $sql = "UPDATE user SET balance = balance + $interest WHERE userID = '$user->userID' AND user.role = 'customer'";
        $model->performQuery($sql);

        $sql = "INSERT INTO transaction VALUES (NULL, $interest, $user->userID, NULL, NOW(), , 'interest')";
        $model->performQuery($sql);
    }
}


// Update month starting balance
$sql = "UPDATE user SET monthStartBalance = balance AND user.role = 'customer'";
$model->performQuery($sql);