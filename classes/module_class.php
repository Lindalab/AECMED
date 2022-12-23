<?php 

    require_once("../settings/db_class.php");

    class Module extends db_connection{

        function create_module($module_name, $desc, $department_id){
            $sql = "";
            return $this->db_query($sql);
        }

        function update_module($module_id, $module_name, $desc, $department_id){
            $sql = "";
            return $this->db_query($sql);
        }

        function delete_module($module_id){
            $sql = "";
            return $this->db_query($sql);
        }

        function select_all_module(){
            $sql = "";
            return $this->db_fetch_all($sql);
        }

        function select_one_module($module_id){
            $sql = "";
            return $this->db_fetch_one($sql);
        }
    }


?>