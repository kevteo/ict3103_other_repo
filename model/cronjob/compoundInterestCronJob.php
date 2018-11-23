<!-- Run on first day every month -->

<?php
require_once("../Model.php");
$model = Model::getInstance();


// Compound Interest
$sql = "SELECT * FROM user";
$result = $model->performQuery($sql);

while ($user = mysqli_fetch_object($result)) {
    if ($user->monthStartBalance >= 1000) {
        $interest = $user->monthMinBalance * 0.001;

        $sql = "UPDATE user SET balance = balance + $interest WHERE userID = '$user->userID' AND user.role = 'customer'";
        $model->performQuery($sql);

        $sql = "INSERT INTO transaction VALUES (NULL, $interest, $user->userID, NULL, NOW(), 'interest')";
        $model->performQuery($sql);
    }

    
    // Get balance after interest
    $sql = "SELECT balance FROM user WHERE userID = '$user->userID'";
    $result2 = $model->performQuery($sql);
    $balance = mysqli_fetch_row($result2)[0];

    // Update month starting balance
    $sql = "UPDATE user SET user.monthStartBalance = $balance WHERE user.role = 'customer' AND userID = '$user->userID' AND isTerminated = 0";
    $model->performQuery($sql);

    //echo $sql . "<br/.";
}


