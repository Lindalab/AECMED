<?php 
    require_once dirname(__FILE__)."/../controllers/event_controller.php";


    function show_events($department){
        $event_list = event_for_department_ctr($department);
        foreach($event_list as $event){
            event_row($event['event_id'], $event['event_name'], $event['date_organized'], $event['event_type'], $event['male_attendance']+$event['female_attendance']);
        }
    }

    function event_row($event_id, $name, $date, $type){

    }


?>