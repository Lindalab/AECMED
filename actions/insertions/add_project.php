<?php 
    require_once dirname(__FILE__).("/../../controllers/project_controller.php");
    require_once dirname(__FILE__).("/../../controllers/general_controller.php");


    $root_dir = "../../images/projects";
    $upload_root_dir = "../images/projects/";
    $file = $_FILES["project_image"];
    $file_dest = $root_dir . "/" . basename(str_replace(' ', '_',$file["name"]));
    $upload_file_dest = $upload_root_dir . basename(str_replace(' ', '_',$file["name"]));
    $file_type = strtolower(pathinfo($file_dest, PATHINFO_EXTENSION));

    $move = move_uploaded_file($file["tmp_name"], $file_dest);
    $status = 1;
    $sdg_goals = "";
    $sdg = $_POST['sdg_goals'];
    $sdg_goals = checkbox_data($sdg);
    // $sdg_goals .= "0";
    if($move){
       
        $insert = create_project_ctr($_POST['project_name'], $_POST['desc'], $status, $_POST['date_started'], $sdg_goals, $_POST['department'], $_POST['sector'], $upload_file_dest);
        $department_id = $_POST['department'];

        if($insert){
            if ($department_id === TAC) {
                header("location: ../../admin/TAC/student projects.php?message=1");
            } elseif ($department_id === D_Lab) {
                header("location: ../../admin/D-Lab/projects overview.php?message=1");
            }
    }else{
        if ($department_id === TAC) {
                header("location: ../../admin/TAC/student projects.php?message=2");
            } elseif ($department_id === D_Lab) {
                header("location: ../../admin/D-Lab/projects overview.php?message=2");
            }
    }

    }else{
        if ($department_id === TAC) {
                header("location: ../../admin/TAC/student projects.php?message=2");
            } elseif ($department_id === D_Lab) {
                header("location: ../../admin/D-Lab/projects overview.php?message=2");
            }
        
    }
    
?>