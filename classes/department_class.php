<?php 
    require_once("../settings/db_class.php");

    class Department extends db_connection{

        function create_department($department_name){
            $sql = "INSERT INTO `department`(`deparment_name`) VALUES ('$department_name')";
            return $this->db_query($sql);
        }

        function update_department($department_id, $department_name){
            $sql = "UPDATE `department` SET `deparment_name`=' $department_name' WHERE `department_id`='$department_id' ";
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
    }

?>