
<?php 
    require_once("../controllers/business_controller.php");

    $business_id=$_POST['business_id'];
    $grant_id= $_POST['grant_id'];
    $amount=$_POST['amount'];
    

    $insert =  add_business_grant_ctr($grant_id,$business_id, $amount);

    if($insert){
        header("location: ../view/index.php?message=1");
    }else{
        header("location:../view/index.php?message=2");
    }


?>