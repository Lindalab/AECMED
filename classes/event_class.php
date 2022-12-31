<?php 
    require_once dirname(__FILE__)."/../settings/db_class.php";
    
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

        function count_all_event(){
            $sql = "SELECT * FROM `events`";
            $this->db_fetch_all($sql);
            return $this->db_count();
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

        function count_event_for_department_ctr($department_id){
            $sql = "SELECT * FROM `events`WHERE `department_id`='$department_id'";
            $this->db_fetch_all($sql);
            return $this->db_count();
        }

        function number_of_male_attendance($department){
            $sql = "SELECT SUM(male_attendance) as males FROM events where events.department_id = $department";

            return $this->db_fetch_one($sql);
        }

        function number_of_female_attendance($department){
            $sql = "SELECT SUM(female_attendace) as females FROM events where events.department_id = $department";

            return $this->db_fetch_one($sql);
        }


        //list of event organised by department in a given year
        function event_for_department_a_year($department_id, $year){
            $sql = "SELECT * FROM `events` where EXTRACT(YEAR FROM date_organized)= '$year' and  `department_id`='$department_id'  ";
            return $this->db_fetch_all($sql);
        }

        
        function event_for_department_over_years($department, $year){
            $sql = "SELECT EXTRACT(Year FROM date_organized) as year, SUM(female_attendace + male_attendance) as attendance FROM `events` WHERE EXTRACT(Year FROM date_organized) >= $year and department_id = $department GROUP BY EXTRACT(Year FROM date_organized);";

            return $this->db_fetch_all($sql);
        }

    }

?>