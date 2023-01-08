
<?php 
    require_once dirname(__FILE__).("/../../controllers/business_controller.php");

    $business_id=$_GET['business_id'];
    $grant_id= $_GET['grant_id'];
    $amount=$_GET['amount'];
    

    $insert =  add_business_grant_ctr($grant_id,$business_id, $amount);

    if($insert){
        echo 1;
    }else{
        echo 2;
    }


?>