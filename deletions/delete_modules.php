<?php 
    require_once("../controllers/module_controller.php");
    $module_id=$_POST['module_id'];
    $delete = delete_module_ctr($module_id);

    if($delete){
        header("location: ../view/index.php?message=1");
    }else{
        header("location:../view/index.php?message=2");
    }



?>