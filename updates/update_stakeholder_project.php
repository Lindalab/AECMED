<?php 

    require_once("../controllers/project_controller.php");

    $updated = update_stakeholder_project($stakeholder_id, $project_id);

    if($updated){
        header("location: ../view/index.php?message=1");
    }else{
        header("location: ../view/index.php?message=2");
    }


?>