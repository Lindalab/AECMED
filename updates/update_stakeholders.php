<?php 
    require_once("../controllers/stakeholder_controller.php");


     $updated = update_stakeholder_ctr($_POST['stakeholder_id'],$_POST["fname"], $_POST["lname"], $_POST["role"], $_POST["gender"], $_POST["email"], $_POST["phone_number"]);

     if($updated){
         header("../view/index.php?message=1");
     }else{
         header("../view/index.php?message=2");
     }


?>