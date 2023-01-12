<?php 

    require_once("../../controllers/module_controller.php");
    $module_id=$_POST['module_id'];
    $module_name=$_POST['module_name'];
    $desc=$_POST['module_description'];
    $department_id=$_POST['department_id'];   


    $updated =update_module_ctr($module_id, $module_name, $desc, $department_id);

    if($updated){
        header("location: ../../admin/AVI/modules.php?message=4");
    }else{
        header("location: ../../admin/AVI/modules.php?message=2");
    }


?>