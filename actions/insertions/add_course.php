<?php 
    require_once dirname(__FILE__)."/../../controllers/course_controller.php";

    $insert = create_course_ctr($_POST['course_name'], $_POST['date_started'], $_POST['desc'], $_POST['status'], $_POST['department']);

    if($insert){
        header("location: ../view/index.php?message=1");
    }else{
        header("location:../view/index.php?message=2");
    }


?>