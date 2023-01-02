<?php 
    require_once dirname(__FILE__)."/../controllers/event_controller.php";

    function display_all_events($department_id){
        $events = event_for_department_ctr($department_id);
        foreach ($events as $event) {
            show_events($event['event_id'], $event['event_name'], $event['event_type'],$event['male_attendance']+$event['female_attendace'], $event['date_organized']);
        }
    }

    function show_events($event_id, $event_name, $event_type,$attendance,  $event_date){
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

?>