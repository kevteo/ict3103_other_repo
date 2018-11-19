<?php 

require_once '../model/Model.php';
$model = Model::getInstance();
$user = unserialize($_SESSION['user']);
$userID = $user->userID;

?>

{"meta": {
        "page": 1,
        "pages": 3,
        "perpage": 5,
		"total":100,
		"sort":"asc",
		"field":"username"
		
    },
	
	"data":<?php echo $model->getTranscationsM(); ?>}