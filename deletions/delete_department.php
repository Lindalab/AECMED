<?php 
    require_once("../controllers/department_controller.php");

    $deleted = delete_department_ctr($_POST['department_id']);

    if($deleted){
        header("location: ../view/index.php?message=1");
    }else{
        header("location:../view/index.php?message=2");
    }

?>