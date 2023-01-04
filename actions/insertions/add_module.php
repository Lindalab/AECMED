
<?php 
    require_once("../controllers/event_controller.php");

    $module_name=$_POST['module_name'];
    $desc=$_POST['module_description'];
    $department_id=$_POST['department_id'];   

    $insert = create_module_ctr($module_name, $desc, $department_id);

    if($insert){
        header("location: ../view/index.php?message=1");
    }else{
        header("location:../view/index.php?message=2");
    }


?>