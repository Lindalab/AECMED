
<?php 
    require_once dirname (__FILE__).("/../../controllers/business_controller.php");

    $business_id=$_POST['business_id'];
    $year= $_POST['year'];
    $amount=$_POST['amount'];
    $department = $_POST['department'];
    

    $insert =  report_business_revenue_ctr($business_id, $amount, $year);


    if($insert){
        if($department === TAC){
            header("location: ../../admin/TAC/business view.php?business_id=$business_id&message=1");
        }elseif($department === AVI){
            header("location: ../../admin/AVI/business view.php?business_id=$business_id&message=1");
        }
    }else{
        if($department === TAC){
            header("location: ../../admin/TAC/business view.php?business_id=$business_id&message=2");
        }elseif($department === AVI){
            header("location: ../../admin/AVI/business view.php?business_id=$business_id&message=2");
        }
    }


?>