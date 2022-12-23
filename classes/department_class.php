<?php 
    require_once("../settings/db_class.php");

    class Department extends db_connection{

        function create_department($department_name){
            $sql = "";
            return $this->db_query($sql);
        }

        function update_department($department_id, $department_name){
            $sql = "";
            return $this->db_query($sql);
        }

        function delete_department($department_id){
            $sql = "";
            return $this->db_query($sql);
        }

        function select_all_department(){
            $sql = "";
            return $this->db_fetch_all($sql);
        }

        function select_one_department($department_id){
            $sql = "";
            return $this->db_fetch_one($sql);
        }
    }

?>