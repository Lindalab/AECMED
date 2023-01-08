<?php 
    require_once dirname(__FILE__).("/../../controllers/course_controller.php");

    $insert = insert_course_student_ctr($_POST['course_id'], $_POST['females'], $_POST['males'], $_POST['year']);

    if($insert){
        header("location: ../view/index.php?message=1");
    }else{
        header("location:../view/index.php?message=2");
    }



?>