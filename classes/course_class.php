<?php 

    require_once("../settings/db_class.php");


    class course extends db_connection{

        function create_course($course_name, $date_started, $desc, $status, $department){
            $sql = "INSERT INTO `course`(`course_name`, `date_started`, `course_description`, `course_status`, `department_id`) VALUES ('$course_name','$date_started','$desc','$status','$department')";
            return $this->db_query($sql);

        }

        function update_course($course_id, $course_name, $date_started, $desc, $status, $department){
            $sql = "UPDATE `course` SET `course_name`=' $course_name',`date_started`='$date_started',`course_description`='$desc`course_status`='$status',`department_id`='$department' WHERE `course_id`='$course_id'";
            return $this->db_query($sql);
        }

        function delete_course($course_id){
            $sql = "DELETE FROM `course` WHERE `course_id`='$course_id'";
            return $this->db_query($sql);
        }

        function select_all_course(){
            $sql = "SELECT * FROM `course`";

            return $this->db_fetch_all($sql);
        }

        function select_one_course($course_id){
            $sql = "SELECT * FROM `course` WHERE `course_id`='$course_id' ";

            return $this->db_fetch_one($sql);
        }

        function select_course_under_dpt($department){
            $sql = " SELECT * FROM `course` WHERE `department_id`='$department' ";

            return $this->db_fetch_all($sql);
        }


        // course student

        function insert_course_student($course_id, $females, $males, $year){
            $sql = "INSERT INTO `course_student`(`course_id`, `numberoffemaleStudent`, `numberofmaleStudent`, `course_year`) VALUES ('$course_id','$females',' $males','$year') ";

            return $this->db_query($sql);
        }

        function update_course_student($course_id, $females, $males, $year){
            $sql = "UPDATE `course_student` SET `numberoffemaleStudent`='$females',`numberofmaleStudent`=' $males',`course_year`='$year' WHERE `course_id`='$course_id'";

            return $this->db_query($sql);
        }

        function delete_course_student($course_id, $females, $males, $year){
            $sql = "DELETE FROM `course_student` WHERE `course_id`='$course_id' and `numberoffemaleStudent`='$females'and `numberofmaleStudent`=' $males' and `course_year`='$year' ";

            return $this->db_query($sql);
        }

        function selet_all_course_student(){
            $sql = "SELECT SUM(numberoffemaleStudent and numberofmaleStudent)  FROM `course_student`";
            return $this->db_fetch_all($sql);
        }

        function selet_a_course_student($course_id){
            $sql = "SELECT SUM(numberoffemaleStudent and numberofmaleStudent)  FROM `course_student` WHERE `course_id`='$course_id'";
            return $this->db_fetch_all($sql);
        }
        /**
         * select the number years a course 
         * run
         */
        function select_a_course($course_id){
            $sql = "SELECT `course_year` FROM `course_student` WHERE  `course_id`='$course_id'";
            return $this->db_fetch_all($sql);
        }

        
        /**
         * select the number of courses run a particular year
         */
        function select_course_year($year){
            $sql = "SELECT * FROM `course_student` WHERE `course_year`='$year'";
            return $this->db_fetch_all($sql);
        }

        /**
         * stakeholder modules
         */
        function stakeholder_modules(){
            $sql = "SELECT * FROM module,stakeholder_modules,stakeholder WHERE module.module_id=stakeholder_modules.module_id and stakeholder.stakeholder_id=stakeholder_modules.stakeholder_id";
            return $this->db_fetch_all($sql);
        }

        function insert_stakeholder_modules($stakeholder_id, $module_id){
            $sql = "INSERT INTO `stakeholder_modules`(`stakeholder_id`, `module_id`) VALUES ('$stakeholder_id','$module_id')";
            return $this->db_query($sql);
        }

        function delete_stakeholder_modules($stakeholder_id, $module_id){
            $sql = "DELETE FROM `stakeholder_modules` WHERE `stakeholder_id`='$stakeholder_id'and `module_id`='$module_id'";
            return $this->db_query($sql);
        }

        


    }


?>