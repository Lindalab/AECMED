<?php 
    require_once dirname(__FILE__)."/../../controllers/business_controller.php";

    $business_id = $_GET['business_id'];
    $stakeholder_id = $_GET['stakeholder_id'];

    $delete = delete_stakeholder_business_ctr($stakeholder_id, $business_id);

    if($delete){
        echo 1;
    }else{
        echo 2;
    }

?>