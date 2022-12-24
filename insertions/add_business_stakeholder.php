
<?php 
    require_once("../controllers/business_controller.php");

    $business_id=$_POST['business_id'];
    $stakeholder_id= $_POST['stakeholder_id'];

    

    $insert =  insert_stakeholder_business_ctr($stakeholder_id, $business_id);

    if($insert){
        header("location: ../view/index.php?message=1");
    }else{
        header("location:../view/index.php?message=2");
    }


?>