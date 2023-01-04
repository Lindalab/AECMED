<?php 

    require_once("../controllers/grant_controller.php");
    $module_id=$_POST['module_id'];
    $module_name=$_POST['module_name'];
    $desc=$_POST['module_description'];
    $department_id=$_POST['department_id'];   


    $updated =update_module_ctr($module_id, $module_name, $desc, $department_id);

    if($updated){
        header("location: ../view/index.php?message=1");
    }else{
        header("location: ../view/index.php?message=2");
    }


?>