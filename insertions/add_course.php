<?php 
    require_once("../controllers/course_controller.php");

    $insert = create_course_ctr($_POST['course_name'], $_POST['date_started'], $_POST['desc'], $_POST['status'], $_POST['department']);

    if($insert){
        header("../view/index.php?message=1");
    }else{
        header("../view/index.php?message=2");
    }


?>