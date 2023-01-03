<?php
require_once dirname(__FILE__) . "/../controllers/event_controller.php";



function graph_event_attendance_year($department)
{
    $year = date("Y");
    $year = $year - 4;
    $event_year = event_for_department_over_years_ctr($department, $year);
    $dataPoints = array();
    foreach ($event_year as $event) {
        array_push($dataPoints, array("y" => $event['attendance'], "label" => $event['year']));
    }
    return json_encode($dataPoints, JSON_NUMERIC_CHECK);
}

// print_r(graph_event_attendance_year());


function list_tac_events($department)
{
    $events = event_for_department_ctr($department);
    foreach ($events as $event) {
        event_row($event['event_id'], $event['event_name'], $event['male_attendance'], $event['female_attendace'], $event['date_organized']);
    }
}

function list_dlab_events($department)
{
    $events = event_for_department_ctr($department);
    foreach ($events as $event) {
        event_dlab_row($event['event_id'], $event['event_name'],$event['event_type'], $event['male_attendance'], $event['female_attendace'], $event['date_organized']);
    }
}

function event_dlab_row($event_id,$name, $type, $male_attendance, $female_attendace, $date){

    $attendance = $male_attendance + $female_attendace;
    echo "
        <tr>
        <td>
            $name
        </td>
        <td>
            $type
        </td>
        <td>
            $attendance
        </td>
        <td>
            $date
        </td>
        <td>
            <a href='D-Lab events-view.php?event_id=$event_id'>
                <img src='./../../assets/read-more.svg' alt='View icon'>
            </a>
        </td>
    </tr>
        ";
}

function event_row($event_id, $name, $male_attendance, $female_attendace, $date)
{
    $attendance = $male_attendance + $female_attendace;
    echo "
        <tr>
        <td>
            $name
        </td>
        <td>
            $attendance
        </td>
        <td>
            $date
        </td>
        <td>
            <a href='TAC events-view.php?event_id=$event_id'>
                <img src='./../../assets/read-more.svg' alt='View icon'>
            </a>
        </td>
    </tr>
        ";
}
