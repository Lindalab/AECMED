<?php 

    require_once("../controllers/stakeholder_controller.php");

    $deleted = delete_stakeholder_ctr($_POST['stakeholder_id']);

    if($deleted){
        header("location: ../view/index.php?message=1");
    }else{
        header("location:../view/index.php?message=2");
    }

?>