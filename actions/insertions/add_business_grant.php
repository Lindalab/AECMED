
<?php 
    require_once dirname(__FILE__).("/../../controllers/business_controller.php");

    $business_id=$_POST['business_id'];
    $grant_id= $_POST['grant_id'];
    $amount=$_POST['amount'];
    $date = $_POST['date'];
    $department = $_POST['department'];

    $insert =  add_business_grant_ctr($grant_id,$business_id, $amount, $date);

    if($insert){
        if($department === TAC){
            header("location: ../../admin/TAC/business view.php?business_id=$business_id&message=5");
        }elseif($department === AVI){
            header("location: ../../admin/AVI/business view.php?business_id=$business_id&message=5");
        }
    }else{
        if($department === TAC){
            header("location: ../../admin/TAC/business view.php?business_id=$business_id&message=2");
        }elseif($department === AVI){
            header("location: ../../admin/AVI/business view.php?business_id=$business_id&message=2");
        }
    }


?>