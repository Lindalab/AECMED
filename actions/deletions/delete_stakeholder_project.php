<?php 

    require_once("../controllers/project_controller.php");

    $deleted = delete_stakeholder_project($stakeholder_id, $project_id);

    if($deleted){
        header("location: ../view/index.php?message=1");
    }else{
        header("location: ../view/index.php?message=2");
    }
?>