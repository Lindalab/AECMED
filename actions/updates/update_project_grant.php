<?php 
    require_once dirname(__FILE__)."/../../controllers/grant_controller.php";

    $project_id = $_POST['project_id'];
    $old_amount = $_POST['old_amount'];
    $new_amount = $_POST['new_amount'];
    $old_date = $_POST['old_date'];
    $new_date = $_POST['new_date'];
    $grant_id = $_POST['new_grant_id'];
    $department = $_POST['department'];

    $updated = update_grant_project_ctr($grant_id, $project_id, $old_amount, $old_date, $new_amount, $new_date);

    if($updated){
        if($department == D_Lab){
            header("location: ../../admin/AVI/projects students view.php?project_id=$project_id&message=4");
        }else if($department == TAC){
            header("location: ../../admin/TAC/student projects view.php?project_id=$project_id&message=4");
        }
    }else{
        if($department == D_Lab){
            header("location: ../../admin/AVI/project view.php?project_id=$project_id&message=2");
        }else if($department == TAC){
            header("location: ../../admin/TAC/student projects view.php?project_id=$business_id&message=2");
        
        }
    }



?>