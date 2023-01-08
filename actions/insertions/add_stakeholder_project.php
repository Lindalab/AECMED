<?php 
    require_once dirname(__FILE__).("/../../controllers/project_controller.php");

    if(!empty($_POST['stakeholders'])) {
        foreach($_POST['stakeholders'] as $selected){
         insert_stakeholder_project($selected, $_POST['project_id']);
        }
        header("location: ../view/index.php?message=1");         
      } else {
        header("location: ../view/index.php?message=2");
      }
?>