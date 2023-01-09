<?php 

    require_once dirname(__FILE__).("/../../controllers/stakeholder_controller.php");

    $deleted = delete_stakeholder_ctr($_GET['stakeholder_id']);

    if($deleted){
      echo 1;
    }else{
      echo 2;
    }

?>