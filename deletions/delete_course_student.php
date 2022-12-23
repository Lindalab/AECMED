<?php 
    require_once("../controllers/course_controller.php");

    $insert = delete_course_student_ctr($_POST['course_id'], $_POST['year']);

    if($insert){
        header("location: ../view/index.php?message=1");
    }else{
        header("location:../view/index.php?message=2");
    }



?>