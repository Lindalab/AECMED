<?php 
    require_once dirname(__FILE__).("/../../controllers/project_controller.php");


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
    foreach ($sdg as $goal){
       $sdg_goals .= $goal.",";
    }
    if($move){
        $insert = create_project_ctr($_POST['project_name'], $_POST['desc'], $status, $_POST['date_started'], $sdg_goals, $_POST['department'], $_POST['sector'], $upload_file_dest);

        if($insert){
            header("location: ../../admin/index.php?message=1");
    }else{
        // header("location:../view/index.php?message=2");
    }

    }else{
        // header("location:../view/index.php?message=2");
        // return;
    }
    
?>