<?php
    require_once dirname(__FILE__)."/../controllers/event_controller.php";

$event_details = select_one_event_ctr($_GET['event_id']);
$event_name = $event_details['event_name'];
$event_description = $event_details['event_description'];
$event_date = $event_details['date_organized'];
$males = $event_details['male_attendance'];
$females = $event_details['female_attendace'];
$attendance = $males + $females;

$dataPoint = array();
array_push($dataPoint, array("y"=>$males, "label"=>"males"), array("y"=>$females, "label"=>"females"));

$dataPoint = json_encode($dataPoint, JSON_NUMERIC_CHECK);
