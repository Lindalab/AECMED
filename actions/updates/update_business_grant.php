<?php 
    require_once dirname(__FILE__)."/../../controllers/grant_controller.php";

    $business_id = $_POST['business_id'];
    $new_grant_id = $_POST['new_grant_id'];
    $new_amount = $_POST['new_amount'];
    $new_date = $_POST['new_date'];
    $old_grant_id = $_POST['old_grant_id'];
    $old_amount = $_POST['old_amount'];
    $old_date = $_POST['old_date'];
    $department = $_POST['department'];
    

    $updated = update_business_grant_ctr($business_id, $new_grant_id, $new_amount, $new_date, $old_grant_id, $old_amount, $old_date);

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