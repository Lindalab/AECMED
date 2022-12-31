<?php 
  require_once dirname(__FILE__)."/../classes/event_class.php";

    function create_event_ctr($event_name, $date, $target_group, $desc, $males, $females, $event_type, $department_id){
        $event = new event;
        return $event->create_event($event_name, $date, $target_group, $desc, $males, $females, $event_type, $department_id);

    }

    function update_event_ctr($event_id,$event_name, $date, $target_group, $desc, $males, $females, $event_type, $department_id){
        $event = new event;
        return $event->update_event($event_id,$event_name, $date, $target_group, $desc, $males, $females, $event_type, $department_id);
    }

    function delete_event_ctr($event_id){
        $event = new event;
        return $event->delete_event($event_id);
    }

    function select_all_event_ctr(){
        $event = new event;
        return $event->select_all_event();
    }

    function count_all_event_ctr(){
        $event = new event;
        return $event->count_all_event();
    }

    function select_one_event_ctr($event_id){
        $event = new event;
        return $event->select_one_event($event_id);
    }

    function select_all_event_in_year_ctr($year){
        $event = new event;
        return $event->select_all_event_in_year($year);
    }

    function select_event_type_ctr($event_type){
        $event = new event;
        return $event->select_event_type($event_type);
    }

    function event_for_department_ctr($department_id){
        $event = new event;
        return $event->event_for_department($department_id);
    }

    function count_event_for_department_ctr($department_id){
        $event = new event;
        return $event->count_event_for_department_ctr($department_id);
    }

    function number_of_male_attendance_ctr($department){
        $event = new event;
        return $event->number_of_male_attendance($department);
    }

    function number_of_female_attendance_ctr($department){
        $event = new event;
        return $event->number_of_female_attendance($department);
    }

    function event_for_department_a_year_ctr($department_id, $year){
        $event = new event;
        return $event->event_for_department_a_year($department_id, $year);
    }

    function event_for_department_over_years_ctr($department, $year){
        $event = new event;
        return $event->event_for_department_over_years($department, $year);
    }
?>