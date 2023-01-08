
<?php 
    require_once dirname(__FILE__).("/../../controllers/business_controller.php");

    $business_id=$_POST['business_id'];
    $stakeholder_id= $_POST['stakeholder_id'];

    

    $insert =  insert_stakeholder_business_ctr($stakeholder_id, $business_id);

    if($insert){
        echo 1;
    }else{
        echo  2;
    }


?>