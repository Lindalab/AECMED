<?php 

    require_once("../controllers/project_controller.php");

    $deleted = delete_project_ctr($_POST['project_id']);

    if($deleted){
        header("../view/index.php?message=1");
    }else{
        header("../view/index.php?message=2");
    }

?>