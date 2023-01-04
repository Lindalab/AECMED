
<?php 
    require_once dirname(__FILE__).("/../../controllers/module_controller.php");

    $module_name=$_POST['module_name'];
    $desc=$_POST['module_description'];
    $department_id=AVI;   

    $insert = create_module_ctr($module_name, $desc, $department_id);

    if($insert){
        header("location: ../../admin/AVI/modules.php?message=1");
    }else{
        header("location:../view/index.php?message=2");
    }


?>