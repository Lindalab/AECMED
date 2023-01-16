<?php 
    require_once dirname(__FILE__)."/../../controllers/grant_controller.php";

    $grant_id = $_GET['grant_id'];
    $project_id = $_GET['project_id'];
    $amount = $_GET['amount'];
    $date = $_GET['date'];
    
    $deleted = delete_project_grant_ctr($grant_id, $project_id, $amount, $date);

    if($deleted){
        echo 1;
    }else{
        echo 2;
    }
?>