<?php
require_once("./Model.php");

// TEST CODE Remove this file before submitting
//
//Visit   localhost/ict3104_other_repo/model/TestModel.php   to test the commands below (if using netbeans, CTRL / to uncomment)
//
$model = Model::getInstance(); // Instantiate Object
// Only run this function ONCE to insert data to database if necessary
//$model->insertData();

// Login Example
//$user = $model->login("customer1", "123");
//if ($user) {
//    $user = unserialize($_SESSION['user']);
//    echo $user->name . "<br>";
//    echo $user->userID . "<br>";
//    echo $user->email . "<br>";
// } else {
//    echo "Invalid account!";
//}


// Register Example
// $user = new User("customer", "name", "nric","mobileNumber", "email", "address", "account", "salary");
// if ($user = $model->register($user)) { var_dump($user); }
// else { echo $user; }


// Deposit/Withdraw/Transfer Example (LOGIN TO AN ACCOUNT FIRST)
// echo "<br>".$model->getBalance(1)."<br>";
// $model->withdraw(300);
// echo "<br>".$model->getBalance(1)."<br>";
// $model->deposit(400);
// echo "<br>".$model->getBalance(1)."<br>";
// $model->transfer(200, "024-65463-2");
// echo "<br>".$model->getBalance(1)."<br>";


// Modify & View Profile Example (LOGIN TO AN ACCOUNT FIRST)
//$model->modifyProfile(53, "name", "address", "email", "password", "salary");
//var_dump($model->getProfile());


// Backup Data Example
//$model->downloadBackup();


// Request & Set Toggle Active (LOGIN TO AN ACCOUNT FIRST)
//var_dump($model->requestToggleActive());
//$model->setToggleActive(1);

$model->sendRegistrationEmail("2");
echo "ssssss";
