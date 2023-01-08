<?php 
    require_once dirname(__FILE__).("/../../controllers/grant_controller.php");


    $business_id = $_GET['business_id'];
    $grant_id = $_GET['grant_id'];
    $date = $_GET['date'];

    $delete = delete_business_grant_ctr($business_id, $grant_id, $date);

    if($delete){
        echo 1;
    }else{
        echo 2;
    }


?>