<?php 

    require_once dirname(__FILE__)."/../settings/db_class.php";

    class Module extends db_connection{

        function create_module($module_name, $desc, $department_id){
            $sql = "INSERT INTO `module`(`module_name`, `module_description`, `department_id`) VALUES ('$module_name','$desc','$department_id')";
            return $this->db_query($sql);
        }

        function update_module($module_id, $module_name, $desc, $department_id){
            $sql = "UPDATE `module` SET `module_name`='$module_name',`module_description`='$desc',`department_id`='$department_id' WHERE `module_id`='$module_id'";
            return $this->db_query($sql);
        }

        function delete_module($module_id){
            $sql = "DELETE FROM `module` WHERE `module_id`='$module_id' ";
            return $this->db_query($sql);
        }

        function select_all_module(){
            $sql = "SELECT * FROM `module` ";
            return $this->db_fetch_all($sql);
        }

        function select_one_module($module_id){
            $sql = "SELECT * FROM `module` WHERE `module_id`='$module_id'";
            return $this->db_fetch_one($sql);
        }

        function number_of_modules(){
            $sql = "SELECT * FROM `module` ";

            $this->db_fetch_all($sql);

            return $this->db_count();
        }
    }


?>