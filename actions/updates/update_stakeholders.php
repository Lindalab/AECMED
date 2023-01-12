<?php 
    require_once dirname(__FILE__).("/../../controllers/stakeholder_controller.php");


     $updated = update_stakeholder_ctr($_POST['stakeholder_id'],$_POST["fname"], $_POST["lname"], $_POST["role"], $_POST["gender"], $_POST["email"], $_POST["phone_number"]);

     if($updated){
        header("location: ../../admin/AVI/fellows.php?message=4");
    }else{
        header("location: ../../admin/AVI/fellows.php?message=2");
    }


?>