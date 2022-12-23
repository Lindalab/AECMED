<?php 

    require_once("../controllers/project_controller.php");

    $update = update_project_ctr($_POST['project_id'], $_POST['project_name'], $_POST['desc'], $_POST['status'], $_POST['date_Started'], $_POST['sdg_goals'], $_POST['department_id'], $_POST['sector'], $sector);

    if($update){
        header("location: ../view/index.php?message=1");
    }else{
        header("location:../view/index.php?message=2");
    }

    

?>