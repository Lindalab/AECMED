<?php 
    require_once("../controllers/department_controller.php");

    $updated = update_department_ctr($_POST['department_id'], $_POST['department_name']);

    if($updated){
        header("location: ../view/index.php?message=1");
    }else{
        header("location:../view/index.php?message=2");
    }

?>