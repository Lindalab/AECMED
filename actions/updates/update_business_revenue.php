<?php 
    require_once dirname(__FILE__)."/../../controllers/business_controller.php";

    
    $business_id = $_POST['business_id'];
    $amount = $_POST['new_amount'];
    $year = $_POST['new_year'];
    $old_amount = $_POST['old_amount'];
    $old_year = $_POST['old_year'];
    $department = $_POST['department'];

    
    $updated = update_business_revenue_ctr($business_id, $amount, $year, $old_amount, $old_year);

    if($updated){
        
        if($department == AVI){
            header("location: ../../admin/AVI/business view.php?business_id=$business_id&message=4");
        }else if($department == TAC){
            header("location: ../../admin/TAC/business view.php?business_id=$business_id&message=4");
        }
    }else{
        if($department == AVI){
            header("location: ../../admin/AVI/business view.php?business_id=$business_id&message=2");
        }else if($department == TAC){
            header("location: ../../admin/TAC/business view.php?business_id=$business_id&message=2");
        
        }
    }
?>