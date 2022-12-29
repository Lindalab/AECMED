<?php 
    require_once dirname(__FILE__)."/../controllers/business_controller.php";

    $dataPoints = array();
    
    array_push($dataPoints,  array("y"=>number_of_businesses_by_gender_ctr(AVI,MALE), "label"=>"male entrepreneurs"),
    array("y"=>number_of_businesses_by_gender_ctr(AVI,FEMALE), "label"=>"female entrepreneurs"));

    $dataPoints = json_encode($dataPoints, JSON_NUMERIC_CHECK)

    // print_r($dataPoints);
?>