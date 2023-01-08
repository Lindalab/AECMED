<?php 
    require_once dirname(__FILE__)."/../../controllers/business_controller.php";
    $business_id=$_GET['business_id'];
    $delete = delete_business_ctr($business_id);

    if($delete){
        echo 1;
    }else{
       echo 2;
    }



?>