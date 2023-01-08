
<?php 
    require_once dirname (__FILE__).("/../../controllers/business_controller.php");

    $business_id=$_POST['business_id'];
    $year= $_POST['year'];
    $amount=$_POST['amount'];
    

    $insert =  report_business_revenue_ctr($business_id, $amount, $year);

    if($insert){
        echo 1;
    }else{
        echo 2;
    }


?>