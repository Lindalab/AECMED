<?php 

    require_once("../controllers/business_controller.php");
  $business_id=$_POST['business_id'];
  $year_started=$_POST['year_started'];
  $business_name=$_POST['busines_name'];
  $business_location=$_POST['business_location'];
  $business_contact=$_POST['business_contact'];
  $business_email=$_POST['business_email'];
  $department=$_POST['department_id'];
  $business_type=$_POST['business_type'];
  $sector=$_POST['sector'];
  $business_description=$_POST['business_description'];

    $updated = update_business_ctr($business_id, $year_started, $business_name, $business_location, $business_contact, $business_email,$department, $business_type,$sector, $business_description);

    if($updated){
        header("location: ../view/index.php?message=1");
    }else{
        header("location: ../view/index.php?message=2");
    }


?>