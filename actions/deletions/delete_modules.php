<?php 
    require_once dirname(__FILE__)."/../../controllers/module_controller.php";
    $module_id=$_GET['module_id'];
    $delete = delete_module_ctr($module_id);

    if($delete){
        echo 1;
    }else{
        echo 2;
    }



?>