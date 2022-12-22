<?php 

    require_once("../settings/db_class.php");


    class course extends db_connection{

        function create_course($course_name, $date_started, $desc, $status, $department){
            $sql = "";
            return $this->db_query($sql);

        }

        function update_course($course_id, $course_name, $date_started, $desc, $status, $department){
            $sql = "";
            return $this->db_query($sql);
        }

        function delete_course($course_id){
            $sql = "";
            return $this->db_query($sql);
        }

        function select_all_course(){
            $sql = " ";

            return $this->db_fetch_all($sql);
        }

        function select_one_course($course_id){
            $sql = " ";

            return $this->db_fetch_one($sql);
        }

        function select_course_under_dpt($department){
            $sql = " ";

            return $this->db_fetch_all($sql);
        }


        // course student

        function insert_course_student($course_id, $females, $males, $year){
            $sql = " ";

            return $this->db_query($sql);
        }

        function update_course_student($course_id, $females, $males, $year){
            $sql = " ";

            return $this->db_query($sql);
        }

        function delete_course_student($course_id, $females, $males, $year){
            $sql = " ";

            return $this->db_query($sql);
        }

        function selet_all_course_student(){
            $sql = "";
            return $this->db_fetch_all($sql);
        }

        /**
         * select the number years a course 
         * run
         */
        function select_a_course($course_id){
            $sql = "";
            return $this->db_fetch_all($sql);
        }

        
        /**
         * select the number of courses run a particular year
         */
        function select_course_year($year){
            $sql = "";
            return $this->db_fetch_all($sql);
        }

    }


?>