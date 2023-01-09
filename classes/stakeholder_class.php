<?php 

    require_once dirname(__FILE__)."/../settings/db_class.php";

    class Stakeholder extends db_connection{
        
        function create_stakeholder($fname, $lname, $role, $gender, $email, $phone_number,$stakeholder_image){
            $sql = "INSERT INTO `stakeholder`(`first_name`, `last_name`, `stakeholderRole`, `gender`, `email`, `phone_number`,`stakeholder_image`) VALUES ('$fname','$lname','$role','$gender','$email','$phone_number','$stakeholder_image')";
            return $this->db_query($sql);
        }

        function update_stakeholder($stakeholder_id, $fname, $lname, $role, $gender, $email, $phone_number){
            $sql = "UPDATE `stakeholder` SET `first_name`='$fname',`last_name`='$lname',`stakeholderRole`='$role',`gender`='$gender',`email`='$email',`phone_number`='$phone_number' WHERE `stakeholder_id`='$stakeholder_id'";
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
        function insert_stakeholder_module($stakeholder_id,$module_id){
            $sql="INSERT INTO `stakeholder_modules`(`stakeholder_id`, `module_id`) VALUES ('$stakeholder_id','$module_id')";
            return $this->db_query($sql);
        }

        function number_of_avi_fellows(){
            $sql = "SELECT DISTINCT(stakeholder_business.stakeholder_id) FROM stakeholder_business,stakeholder,business WHERE business.business_id=stakeholder_business.business_id and stakeholder_business.stakeholder_id=stakeholder.stakeholder_id ";

            $this->db_fetch_all($sql);

            return $this->db_count();
        }

        function get_avi_fellows($department){
            $sql="SELECT stakeholder.stakeholder_id as stakeholder_id ,stakeholder.first_name as first_name, stakeholder.last_name as last_name,
            stakeholder.gender as gender, stakeholder.email as email, stakeholder.stakeholder_image as stakeholder_image,cohort.cohort_name as cohort_name,
            cohort.cohort_year as cohort_year,business.busines_name as business_name,business.business_id as business_id, stakeholder.phone_number as phone
             FROM stakeholder,cohort,cohort_business,business,stakeholder_business 
             WHERE stakeholder.stakeholder_id=stakeholder_business.stakeholder_id 
             and stakeholder_business.business_id=business.business_id 
             and business.business_id=cohort_business.business_id 
             and cohort_business.cohort_id=cohort.cohort_id
             and business.department_id= '$department'";
            return $this->db_fetch_all($sql);
        }
    }

?>