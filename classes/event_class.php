<?php 
    require_once("../settings/db_class.php");
    
    class event extends db_connection{

        function create_event($event_name, $date, $target_group, $desc, $males, $females, $event_type, $department_id){
            $sql = "";
            return $this->db_query($sql);
        }

        function update_event($event_id,$event_name, $date, $target_group, $desc, $males, $females, $event_type, $department_id){
            $sql = "";
            return $this->db_query($sql);
        }

        function delete_event($event_id){
            $sql = "";
            return $this->db_query($sql);
        }

        function select_all_event(){
            $sql = "";
            return $this->db_fetch_all($sql);
        }

        // selecting one event
        function select_one_event($event_id){
            $sql = "";
            return $this->db_fetch_one($sql);
        }

        // events done in one particular year 
        function select_all_event_in_year($year){
            $sql = "";
            return $this->db_fetch_all($sql);
        }

        // list of event for a particular type
        function select_event_type($event_type){
            $sql = "";
            return $this->db_fetch_all($sql);
        }

        // list of event organised by a department
        function event_for_department(){
            $sql = "";
            return $this->db_fetch_all($sql);
        }


        //list of event organised by department in a given year
        function event_for_department_a_year($department_id, $year){
            $sql = "";
            return $this->db_fetch_all($sql);
        }

    

    }

?>