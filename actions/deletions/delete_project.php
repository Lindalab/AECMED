<?php 

    require_once("../controllers/project_controller.php");

    $deleted = delete_project_ctr($_POST['project_id']);

    if($deleted){
        header("location: ../view/index.php?message=1");
    }else{
        header("location:../view/index.php?message=2");
    }

?>