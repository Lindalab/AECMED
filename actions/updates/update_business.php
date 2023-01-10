<?php 

    require_once dirname(__FILE__).("/../../controllers/business_controller.php");

  $business_id=$_POST['business_id'];
  $year_started=$_POST['year_started'];
  $business_name=$_POST['busines_name'];
  $business_location=$_POST['business_location'];
  $business_contact=$_POST['business_contact'];
  $business_email=$_POST['business_email'];
  $department=$_POST['department_id'];
  $business_type=1;
  $sector=$_POST['sector'];
  $business_description=$_POST['business_description'];
//   $business_status=$_POST['business_status'];

    $updated = update_business_ctr($business_id, $year_started, $business_name, $business_location, $business_contact, $business_email,$department,$sector, $business_description);

    if($updated){
        header("location: ../../admin/index.php?message=1");
    }else{
        header("location: ../../view/index.php?message=2");
    }


?>