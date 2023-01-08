<?php 

    require_once dirname(__FILE__)."/../../controllers/project_controller.php";

    $deleted = delete_project_ctr($_GET['project_id']);

    if($deleted){
        echo 1;
    }else{
       echo 2;
    }

?>