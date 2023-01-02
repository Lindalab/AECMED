<?php 
    require_once dirname(__FILE__)."/../controllers/event_controller.php";
    require_once dirname(__FILE__)."/../controllers/grant_controller.php";

    $event_id = $_GET['event_id'];
    
    $event = select_one_event_ctr($event_id);

    $name = $event['event_name'];
    $date = $event['date_organized'];
    $females = $event['female_attendace'];
    $males = $event['male_attendance'];
    $type = $event['event_type'];
    $desc = $event['event_description'];
    $target_group = $event['target_group'];
    
    // $grants = "";

?>