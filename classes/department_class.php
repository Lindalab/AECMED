<?php 
        require_once dirname(__FILE__)."/../settings/db_class.php";

    class Department extends db_connection{

        function create_department($department_name){
            $sql = "INSERT INTO `department`(`department_name`) VALUES ('$department_name')";
            return $this->db_query($sql);
        }

        function update_department($department_id, $department_name){
            $sql = "UPDATE `department` SET `department_name`=' $department_name' WHERE `department_id`='$department_id' ";
            return $this->db_query($sql);
        }

        function delete_department($department_id){
            $sql = "DELETE FROM `department` WHERE `department_id`='$department_id'";
            return $this->db_query($sql);
        }

        function select_all_department(){
            $sql = "SELECT * FROM `department` ";
            return $this->db_fetch_all($sql);
        }

        function select_one_department($department_id){
            $sql = "SELECT * FROM `department` WHERE `department_id`='$department_id'";
            return $this->db_fetch_one($sql);
        }

        /***
     * Cohort Actons
     */

        function create_cohort($cohort_name,$cohort_year){
            $sql="INSERT INTO `cohort`(`cohort_name`, `cohort_year`) VALUES ('$cohort_name','$cohort_year')";
            return $this->db_query($sql);
        }
        function delete_cohort($cohort_id){
            $sql="DELETE FROM `cohort` WHERE `cohort_id`='$cohort_id'";
            return $this->db_query($sql);
        }
        function select_all_cohort(){
            $sql="SELECT * FROM `cohort`";
            return $this->db_fetch_all($sql);
        }
    }

?>