<?php 
    require_once dirname(__FILE__).("/../../controllers/stakeholder_controller.php");

    // checking if the person exit using the email.
    $person_exist = select_one_stakeholder_email_ctr($_POST['email'], $_POST["phone_number"]);
    
    
    if($person_exist){
        header("location: ../../admin/index.php?message=3");
        return;
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
            header("location: ../../admin/index.php?message=1");
        }else{
            header("location: ../../admin/index.php?message=2");
        }
    }else{
        header("location: ../../admin/index.php?message=2");
    }

?>