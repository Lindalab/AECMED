<?php 
    require_once dirname(__FILE__).("/../../controllers/business_controller.php");

    
  $year_started=$_POST['year_started'];
  $business_name=$_POST['business_name'];
  $business_location=$_POST['business_location'];
  $business_contact=$_POST['business_contact'];
  $business_email=$_POST['business_email'];
  $department=$_POST['department_id'];
  $business_type=$_POST['business_type'];
  $sector=$_POST['sector'];
  $business_description=$_POST['business_description'];


    // checking if the person exit using the email.
    $business_exist = select_one_business_email_ctr($business_email);
    
    if($business_exist){
        // header("view/index.php?message=3");
        return;
    }

    $root_dir = "../../images/business";
    $upload_root_dir = "../images/business/";
    $file = $_FILES["business_logo"];
    $file_dest = $root_dir . "/" . basename(str_replace(' ', '_',$file["name"]));
    $upload_file_dest = $upload_root_dir . basename(str_replace(' ', '_',$file["name"]));
    $file_type = strtolower(pathinfo($file_dest, PATHINFO_EXTENSION));

    $move = move_uploaded_file($file["tmp_name"], $file_dest);

    if($move){
        $insert = create_business_ctr($year_started, $business_name,$upload_file_dest, $business_location, $business_contact, $business_email,$department, $sector, $business_description);
        if($insert){
            header("location: ../../admin/index.php?message=1");
        }else{
            // header("location:../view/index.php?message=2");
        }
    }else{
        // header("location: ../view/index.php?message=2");
    }

?>