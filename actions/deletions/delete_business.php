<?php 
    require_once("../controllers/business_controller.php");
    $business_id=$_POST['business_id'];
    $delete = delete_business_ctr($business_id);

    if($delete){
        header("location: ../view/index.php?message=1");
    }else{
        header("location:../view/index.php?message=2");
    }



?>