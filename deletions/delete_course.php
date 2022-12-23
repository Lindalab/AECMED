<?php 

require_once("../controllers/course_controller.php");

    
$deleted = delete_course_ctr($_POST['course_id']);

if($deleted){
    header("../view/index.php?message=1");
}else{
    header("../view/index.php?message=2");
}

?>