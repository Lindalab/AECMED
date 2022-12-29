<?php 
    require_once dirname(__FILE__)."/../controllers/grant_controller.php";

    $grant = select_one_grant_ctr($_GET['grant_id']);
    $grant_name = $grant['grant_name'];
    $total_amount = $grant['amount'];
    $date = $grant['date_received'];
    $description = $grant['grant_description'];


?>