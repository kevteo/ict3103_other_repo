<?php 

require_once '../model/Model.php';


?>

{"meta": {
        "page": 1,
        "pages": 3,
        "perpage": 5,
		"total":100,
		"sort":"asc",
		"field":"username"
		
    },
	
	"data":<?php echo $model->getCustomersApproved(); ?>}