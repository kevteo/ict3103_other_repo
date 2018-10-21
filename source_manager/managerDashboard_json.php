<?php 

require_once '../model/Model.php';
$model = Model::getInstance();

?>

{"meta": {
        "page": 1,
        "pages": 3,
        "perpage": 5,
		"total":100,
		"sort":"asc",
		"field":"username"
		
    },
	
	"data":<?php echo $model->getCustomersCreated(); ?>}