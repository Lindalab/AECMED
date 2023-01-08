
<?php 
    require_once dirname(__FILE__).("/../../controllers/stakeholder_controller.php");

    $stakeholder_id=$_POST['stakeholder_id'];
    $module_id= $_POST['module_id'];
   

    $insert = insert_stakeholder_module_ctr($stakeholder_id,$module_id);

    if($insert){
        header("location: ../view/index.php?message=1");
    }else{
        header("location:../view/index.php?message=2");
    }


?>