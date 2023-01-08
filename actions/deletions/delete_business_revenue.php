<?php 
    require_once dirname(__FILE__).("/../../controllers/business_controller.php");


    $business_id = $_GET['business_id'];
    $year = $_GET['year'];

    $deleted = delete_business_revenue_ctr($business_id, $year);  

    if($deleted){
        echo 1;
    }else{
        echo 2;
    }
?>