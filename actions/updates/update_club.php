<?php 
    require_once dirname(__FILE__)."/../../controllers/clubs_controller.php";

    $club_id = $_POST['club_id'];
    $name = $_POST['club_name'];
    $description = $_POST['desc'];
    $executives_number = $_POST['execs'];
    $males = $_POST['males'];
    $females = $_POST['females'];
    $date_registered = $_POST['date'];
    $lead_name = $_POST['lead_name'];
    $total_numbers = $males+$females+$executives_number;
    $department = $_POST['department'];

    $result = update_club_ctr($club_id, $name, $description, $executives_number, $total_numbers, $males, $females, $department, $date_registered, $lead_name);

?>