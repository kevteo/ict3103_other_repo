<?php
require_once('../model/Model.php');
$model = Model::getInstance();


if (isset($_GET['request']) && isset($_GET['user_id']) ) {
    $user_id = $_GET['user_id'];
    $request= $_GET['request'];

    if($request=="approve"){
        $result = $model->setToggleActive($user_id);

        if($result){
            header('Location: adminUserStatusRequest.php?success=1&msg=Successfully update the status');
        }else{
            header('Location: adminUserStatusRequest.php?success=0&msg=some error occurs');

        }

    }
    else if($request=="fail"){
        $result = $model->setToggleFail($user_id);
        if($result){
            header('Location: adminUserStatusRequest.php?success=1&msg=Successfully rejected');
        }else{
            header('Location: adminUserStatusRequest.php?success=0&msg=some error occurs');

        }

        //header('Location: managerUserStatusRequest.php');
    }

}


?>