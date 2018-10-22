<?php
require_once('../model/Model.php');
$model = Model::getInstance();


if (isset($_GET['request']) && isset($_GET['user_id']) ) {
    $user_id = $_GET['user_id'];
    $request= $_GET['request'];

    if($request=="approve"){
        $result = $model->setToggleActiveForManager($user_id);

        if($result){
            header('Location: managerUserStatusRequest.php?success=1&msg=Successfully sent the request to admin to review');
        }else{
            header('Location: managerUserStatusRequest.php?success=0&msg=some error occurs');

        }

    }
    else if($request=="fail"){
        $result = $model->setToggleFail($user_id);
        if($result){
            header('Location: managerUserStatusRequest.php?success=1&msg=Successfully rejected');
        }else{
            header('Location: managerUserStatusRequest.php?success=0&msg=some error occurs');

        }

        //header('Location: managerUserStatusRequest.php');
    }

}


?>