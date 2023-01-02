<?php 
    require_once dirname(__FILE__)."/../controllers/grant_controller.php";

    $grant_id = $_GET['grant_id'];
    $grant = select_one_grant_ctr($grant_id);
    $name = $grant['grant_name'];
    $desc = $grant['grant_description'];
    $amount = $grant['amount'];
    $image = $grant['grant_company_image'];
    $date = $grant['date_received'];

?>