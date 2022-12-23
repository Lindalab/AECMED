<?php 

    require_once("../settings/db_class.php");

    class Stakeholder extends db_connection{
        
        function create_stakeholder($fname, $lname, $role, $gender, $email, $phone_number,$stakeholder_image){
            $sql = "INSERT INTO `stakeholder`(`first_name`, `last_name`, `stakeholderRole`, `gender`, `email`, `phone_number`,`stakeholder_image`) VALUES ('$fname','$lname','$role','$gender','$email','$phone_number','$stakeholder_image')";
            return $this->db_query($sql);
        }

        function update_stakeholder($stakeholder_id, $fname, $lname, $role, $gender, $email, $phone_number,$stakeholder_image){
            $sql = "UPDATE `stakeholder` SET `first_name`='$fname',`last_name`='$lname',`stakeholderRole`='$role',`gender`='$gender',`email`='$email',`phone_number`='$phone_number',`stakeholder_image`=$stakeholder_image WHERE `stakeholder_id`='$stakeholder_id'";
            return $this->db_query($sql);
        }

        function delete_stakeholder($stakeholder_id){
            $sql = "DELETE FROM `stakeholder` WHERE `stakeholder_id`='$stakeholder_id'";
            return $this->db_query($sql); 
        }

        function select_all_stakeholders(){
            $sql = "SELECT * FROM `stakeholder`";
            return $this->db_fetch_all($sql);
        }

        function select_one_stakeholder($stakeholder_id){
            $sql = "SELECT * FROM `stakeholder` WHERE `stakeholder_id`='$stakeholder_id'";
            return $this->db_fetch_one($sql);
        }

        function select_one_stakeholder_email($email){
            $sql = "SELECT * FROM `stakeholder` WHERE `email`='$email'";
            return $this->db_fetch_one($sql);
        }

        
    }

?>