<?php 

    require_once("../settings/db_class.php");

    class Stakeholder extends db_connection{
        
        function create_stakeholder($fname, $lname, $role, $gender, $email, $phone_number){
            $sql = "";
            return $this->db_query($sql);
        }

        function update_stakeholder($stakeholder_id, $fname, $lname, $role, $gender, $email, $phone_number){
            $sql = "";
            return $this->db_query($sql);
        }

        function delete_stakeholder($stakeholder_id){
            $sql = "";
            return $this->db_query($sql); 
        }

        function select_all_stakeholders(){
            $sql = "";
            return $this->db_fetch_all($sql);
        }

        function select_one_stakeholder($stakeholder_id){
            $sql = "";
            return $this->db_fetch_one($sql);
        }

        function select_one_stakeholder_email($email){
            $sql = "";
            return $this->db_fetch_one($sql);
        }

        
    }

?>