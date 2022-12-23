<?php 
    require_once("../settings/db_class.php");
    
    class event extends db_connection{

        function create_event($event_name, $date, $target_group, $desc, $males, $females, $event_type, $department_id){
            $sql = "INSERT INTO `events`(`event_name`, `date_organized`, `target_group`, `event_description`, `male_attendance`, `female_attendace`, `event_type`, `department_id`) VALUES ('$event_name','$date','$target_group','$desc','$males','$females','$event_type','$department_id')";
            return $this->db_query($sql);
        }

        function update_event($event_id,$event_name, $date, $target_group, $desc, $males, $females, $event_type, $department_id){
            $sql = "UPDATE `events` SET`event_name`='$event_name',`date_organized`='$date',`target_group`='$target_group',`event_description`='$desc',`male_attendance`='$males',`female_attendace`='$females',`event_type`='$event_type',`department_id`='$department_id' WHERE `event_id`='$event_id'";
            return $this->db_query($sql);
        }

        function delete_event($event_id){
            $sql = "DELETE FROM `events` WHERE `event_id`='$event_id'";
            return $this->db_query($sql);
        }

        function select_all_event(){
            $sql = "SELECT * FROM `events`";
            return $this->db_fetch_all($sql);
        }

        // selecting one event
        function select_one_event($event_id){
            $sql = "SELECT * FROM `events` WHERE `event_id`='$event_id'";
            return $this->db_fetch_one($sql);
        }

        // events done in one particular year 
        function select_all_event_in_year($year){
            $sql = "SELECT * FROM `events` where EXTRACT(YEAR FROM date_organized)= '$year'";
            return $this->db_fetch_all($sql);
        }

        // list of event for a particular type
        function select_event_type($event_type){
            $sql = "SELECT * FROM `events` WHERE `event_type`='$event_type'";
            return $this->db_fetch_all($sql);
        }

        // list of event organised by a department
        function event_for_department($department_id){
            $sql = "SELECT * FROM `events`WHERE `department_id`='$department_id'";
            return $this->db_fetch_all($sql);
        }


        //list of event organised by department in a given year
        function event_for_department_a_year($department_id, $year){
            $sql = "SELECT * FROM `events` where EXTRACT(YEAR FROM date_organized)= '$year' and  `department_id`='$department_id'  ";
            return $this->db_fetch_all($sql);
        }

    

    }

?>