<?php 

    require_once("../../controllers/project_controller.php");

    $update = update_project_ctr($_POST['project_id'], $_POST['project_name'], $_POST['description'], $_POST['status'], $_POST['date_started'], json_encode(($_POST['sdg_goals'])), $_POST['department'], $_POST['sector']);

    if($update){
        // header("location: ../view/index.php?message=1");
        echo "fun";
    }else{
        // header("location:../view/index.php?message=2");
        echo "not funny";
    }

    

?>