<?php 
    require_once("../controllers/course_controller.php");

    $updated = update_course_student_ctr($_POST['course_id'], $_POST['females'], $_POST['males'], $_POST['year']);

    if($updated){
        header("location: ../view/index.php?message=1");
    }else{
        header("location:../view/index.php?message=2");
    }



?>