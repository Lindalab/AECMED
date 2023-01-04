<?php

require_once("../controllers/course_controller.php");


$deleted = delete_course_ctr($_POST['course_id']);

if ($deleted) {
    header("location: ../view/index.php?message=1");
} else {
    header("location:../view/index.php?message=2");
}

?>