<?php 

    require_once dirname(__FILE__).("/../../controllers/business_controller.php");
    require_once dirname(__FILE__).("/../../controllers/general_controller.php");

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
  
  $employees = $_POST['employees'];
  $structures = $_POST['formalised_structures'];
  $sdgs = $_POST['sdg_goals'];
  $sdg_goals = checkbox_data($sdgs);

  $updated = update_business_ctr($business_id, $year_started, $business_name, $business_location, $business_contact, $business_email,$department,$sector, $business_description);

    if($updated){
        $update_details = update_business_details_ctr($business_id, $employees, $structures, $sdg_goals);

        if($update_details){
            if($department == AVI){
                header("location: ../../admin/AVI/business hybrid.php?message=4");
            }else if($department == TAC){
                header("location: ../../admin/TAC/businesses.php?message=4");
            }
        }else{
            if($department == AVI){
                header("location: ../../admin/AVI/business hybrid.php?message=2");
            }else if($department == TAC){
                header("location: ../../admin/TAC/businesses.php?message=2");
            
        }
    }
      
    }else{
        if($department == AVI){
            header("location: ../../admin/AVI/business hybrid.php?message=2");
        }else if($department == TAC){
            header("location: ../../admin/TAC/businesses.php?message=2");
        }
    }


?>