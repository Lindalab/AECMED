
<?php 
    require_once("../controllers/business_controller.php");

    $business_id=$_POST['business_id'];
    $year= $_POST['year'];
    $amount=$_POST['amount'];
    

    $insert =  report_business_revenue_ctr($business_id, $amount, $year);

    if($insert){
        header("location: ../view/index.php?message=1");
    }else{
        header("location:../view/index.php?message=2");
    }


?>