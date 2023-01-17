<?php 
    require_once dirname(__FILE__).("/../../controllers/stakeholder_controller.php");
    require_once dirname(__FILE__).("/../../controllers/business_controller.php");

    // checking if the person exit using the email.
    $person_exist = select_one_stakeholder_email_ctr($_POST['email'], $_POST["phone_number"]);
    
    $department = $_POST['department'];
    $business_id = $_POST['business_id'];
    
    if($person_exist){
        $insert = create_stakeholder_ctr($_POST["fname"], $_POST["lname"], $_POST["role"], $_POST["gender"], $_POST["email"], $_POST["phone_number"],$upload_file_dest);
       
        if($insert){            
            $stakeholder = select_one_stakeholder_email_ctr($_POST['email'], $_POST["phone_number"]);
            $stakeholder_id = $stakeholder['stakeholder_id'];
            $insert_stakeholder = insert_stakeholder_business_ctr($stakeholder_id, $business_id);
            if($insert_stakeholder){
                if($insert_stakeholder){
                    if($department === TAC){
                        header("location: ../../admin/TAC/business view.php?business_id=$business_id&message=6");
                    }elseif($department === AVI){
                        header("location: ../../admin/AVI/business view.php?business_id=$business_id&message=6");
                    }
                }else{
                    if($department === TAC){
                        header("location: ../../admin/TAC/business view.php?business_id=$business_id&message=2");
                    }elseif($department === AVI){
                        header("location: ../../admin/AVI/business view.php?business_id=$business_id&message=2");
                    }
                }
            }
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
            $stakeholder = select_one_stakeholder_email_ctr($_POST['email'], $_POST["phone_number"]);
            $stakeholder_id = $stakeholder['stakeholder_id'];
            $insert_stakeholder = insert_stakeholder_business_ctr($stakeholder_id, $business_id);
            if($insert_stakeholder){
                if($insert_stakeholder){
                    if($department === TAC){
                        header("location: ../../admin/TAC/business view.php?business_id=$business_id&message=6");
                    }elseif($department === AVI){
                        header("location: ../../admin/AVI/business view.php?business_id=$business_id&message=6");
                    }
                }else{
                    if($department === TAC){
                        header("location: ../../admin/TAC/business view.php?business_id=$business_id&message=2");
                    }elseif($department === AVI){
                        header("location: ../../admin/AVI/business view.php?business_id=$business_id&message=2");
                    }
                }
            }
        }
    }else{
        if($department === TAC){
            header("location: ../../admin/TAC/business view.php?business_id=$business_id&message=2");
        }elseif($department === AVI){
            header("location: ../../admin/AVI/business view.php?business_id=$business_id&message=2");
        }
    }

?>