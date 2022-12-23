<?php 
    require_once("../controllers/department_controller.php");

    $insert = create_department_ctr($_POST['department_name']);

    if($insert){
        header("location: ../view/index.php?message=1");
    }else{
        header("location:../view/index.php?message=2");
    }
    
?>