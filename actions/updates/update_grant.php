<?php 

    require_once("../../controllers/grant_controller.php");

    $grant_id = $_POST['grant_id'];
    $grant_name = $_POST['grant_name'];
    $grant_type = $_POST['grant_type'];
    $date_received = $_POST['date_received'];
    $grant_desc = $_POST['grant_description'];
    $department_id = $_POST['department_id'];
    $amount = $_POST['amount'];

    $updated = update_grant_ctr($grant_id, $grant_name, $grant_type, $date_received, $grant_desc,$department_id, $amount);

    if($updated){
        header("location: ../../admin/index.php?message=1");
    }else{
        header("location: ../view/index.php?message=2");
    }


?>