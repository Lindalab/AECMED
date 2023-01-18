<?php 
    require_once dirname(__FILE__).("/../../controllers/project_controller.php");

    require_once dirname(__FILE__).("/../../controllers/stakeholder_controller.php");

    // checking if the person exit using the email.
    $person_exist = select_one_stakeholder_email_ctr($_POST['email'], $_POST["phone_number"]);
    
    $department = $_POST['department'];
    
    if($person_exist){
        if($department = AVI){
            header("location: ../../admin/AVI/fellows.php?message=3");
            exit;
        }
    }

    $root_dir = "../../images/stakeholders";
    $upload_root_dir = "../images/stakeholders/";
    $file = $_FILES["stakeholder_image"];
    $file_dest = $root_dir . "/" . basename(str_replace(' ', '_',$file["name"]));
    $upload_file_dest = $upload_root_dir . basename(str_replace(' ', '_',$file["name"]));
    $file_type = strtolower(pathinfo($file_dest, PATHINFO_EXTENSION));

    $move = move_uploaded_file($file["tmp_name"], $file_dest);

    if($move){
        $insert = create_stakeholder_ctr($_POST["fname"], $_POST["lname"], $_POST["role"], $_POST["gender"], $_POST["email"], $_POST["phone_number"],$upload_file_dest);
        if($insert){
          $stakeholder = select_one_stakeholder_email_ctr($_POST["email"],$_POST["phone_number"]);
          $stakeholder_id = $stakeholder['stakeholder_id'];
          $project_id = $_POST['project_id'];
          $stk_pro = insert_stakeholder_project($stakeholder_id, $_POST['project_id']);
          if($stk_pro){
            echo "hello";
          }else{
            echo "not ok";
          }
        }
    }

    
    
    
    
    
    
    // if(!empty($_POST['stakeholders'])) {
    //     foreach($_POST['stakeholders'] as $selected){
    //      insert_stakeholder_project($selected, $_POST['project_id']);
    //     }
    //     header("location: ../view/index.php?message=1");         
    //   } else {
    //     header("location: ../view/index.php?message=2");
    //   }
?>