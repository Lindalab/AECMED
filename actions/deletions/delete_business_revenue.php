<?php 
    require_once dirname(__FILE__).("/../../controllers/business_controller.php");


    $business_id = $_GET['business_id'];
    $year = $_GET['year'];
    $amount = $_GET['amount'];

    $deleted = delete_business_revenue_ctr($business_id, $year, $amount);  

    if($deleted){
        echo 1;
    }else{
        echo 2;
    }
?>