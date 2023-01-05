<?php 
    require_once dirname(__FILE__)."/../settings/db_class.php";

    class Club extends db_connection{

        function create_club($name, $description, $executives_number, $total_numbers, $males, $females, $department, $date_registered, $lead_name){
            $sql = "INSERT INTO `clubs`(`name`, `description`, `number_of_excutives`, `number_of_members`, `number_of_females`, `number_of_males`, `date_registered`, `department`, `lead_name`) VALUES ('$name','$description','$executives_number','$total_numbers','$females','$males','$date_registered', '$department','$lead_name')";

            return $this->db_query($sql);
        }

        function update_club($club_id, $name, $description, $executives_number, $total_numbers, $males, $females, $department, $date_registered, $lead_name){
            $sql = "UPDATE `clubs` SET `name`='$name',`description`='$description',`number_of_excutives`='$executives_number',`number_of_members`='$total_numbers',`number_of_females`='$females',`number_of_males`='$males',`date_registered`='$date_registered',`department`='$department',`lead_name`='$lead_name' WHERE `club_id`='$club_id'";

            return $this->db_query($sql);
        }

        function delete_club($club_id){
            $sql = "DELETE FROM `clubs` WHERE club_id = $club_id";

            return $this->db_query($sql);
        }

        function select_all_clubs(){
            $sql = "SELECT * FROM clubs";

            return $this->db_fetch_all($sql);
        }

        function select_one_club($club_id){
            $sql = "SELECT * FROM clubs where club_id = $club_id";

            return $this->db_fetch_one($sql);
        }

        function count_clubs(){
            $sql = "SELECT * FROM clubs";
            $this->db_fetch_all($sql);
            return $this->db_count();
        }

        function total_club_members(){
            $sql = "SELECT SUM(number_of_members) as number FROM clubs";
            return $this->db_fetch_one($sql);
        }

        

    }


?>