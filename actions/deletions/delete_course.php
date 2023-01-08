<?php

require_once dirname(__FILE__)."/../../controllers/course_controller.php";


$deleted = delete_course_ctr($_GET['course_id']);

if ($deleted) {
  echo 1;
} else {
 echo 2;
}

?>