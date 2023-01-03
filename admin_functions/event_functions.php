<?php
require_once dirname(__FILE__) . "/../controllers/event_controller.php";



function number_of_event_organised_per_year($department)
{
    $event_year = number_of_events_organised_by_departments_over_years_ctr($department);
    $dataPoints = array();
    foreach ($event_year as $event) {
        array_push($dataPoints, array("y" => $event['count'], "label" => $event['year']));
    }
    return json_encode($dataPoints, JSON_NUMERIC_CHECK);
}

function event_attendance_per_year($department)
{
    $year = date("Y");
    $year = $year - 4;
    $event_year = event_for_department_over_years_ctr($department, $year);
    foreach($event_year as $event){
        single_event_attendance($event['year'], $event['attendance']);
    }
}

function single_event_attendance($year, $attendance)
{
    echo "
        <div class='col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12 p-3'>
        <h2 class='font-weight-normal mb-3'><span>$attendance</span></h2>
        <div class='mb-0 mt-3 legend-item'>
            <span class='fa-xs text-primary mr-1 legend-title '></span>
            <span class='legend-text'>$year</span></div>
    </div>
        ";
}





function display_all_events($department_id)
{
    $events = event_for_department_ctr($department_id);
    foreach ($events as $event) {
        show_events($event['event_id'], $event['event_name'], $event['event_type'], $event['male_attendance'] + $event['female_attendace'], $event['date_organized']);
    }
}

function show_events($event_id, $event_name, $event_type, $attendance,  $event_date)
{
    echo "
        <tr>
        <td>$event_name </td>
        <td>$event_type</td>
        <td>$attendance </td>
        <td>$event_date</td>
        <td>
            <a href='events view.php?event_id=$event_id'>
                <button class='btn btn-outline-info'>View</button>
            </a>
            <a href='../../forms/edit/edit-event.php?event_id=$event_id'>
                <button class='btn btn-outline-warning'>Edit</button>
            </a>
            <button class='btn btn-outline-danger'>Remove</button>
        </td>
    </tr>
        ";
}


function event_per_year(){
    $event_year = number_of_events_organised_per_year_ctr();
    $dataPoints = array();
    foreach ($event_year as $event) {
        array_push($dataPoints, array("y" => $event['count'], "label" => $event['year']));
    }
    return json_encode($dataPoints, JSON_NUMERIC_CHECK);
}
