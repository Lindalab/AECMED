<?php 
    require_once("../settings/db_class.php");

    class Business extends db_connection{

        /**
         * create new business 
         */
        function create_business($year_started, $business_name,$business_logo, $business_location, $business_contact, $business_email,$department, $business_type,$sector, $business_description){
            
            $sql = "INSERT INTO `business`(`year_started`, `busines_name`, `business_logo`, `business_location`, `business_contact`, `business_email`, `department_id`, `business_type`, `sector`, `business_description`) VALUES ('$year_started',' $business_name','$business_logo','$business_location',' $business_contact','$business_email','$department','$business_type','$sector','$business_description')";

            return $this->db_query($sql);
        }

        function create_business_details($business_id,$number_of_employees, $formalised_structure, $sdg_alignment){
            
            $sql = "INSERT INTO `business_details`(`business_id`, `number_of_employees`,`formalised_structure`, `sdg_alignment`) VALUES ('$business_id','$number_of_employees','$formalised_structure','$sdg_alignment')";

            
            
            return $this->db_query($sql);
        }

        /**
         * updates details of the business
         */
        function update_business($business_id, $year_started, $business_name,$business_logo, $business_location, $business_contact, $business_email,$department, $business_type,$sector, $business_description){
            $sql = "UPDATE `business` SET `year_started`='$year_started',`busines_name`='$business_name',`business_logo`='$business_logo',`business_location`='$business_location',`business_contact`='$business_contact',`business_email`='$business_email',`department_id`='$department',`business_type`='$business_type',`sector`='$sector',`business_description`='$business_description' WHERE `business_id`='$business_id'";

            return $this->db_query($sql);
        }

        function update_business_details($business_id,$number_of_employees, $formalised_structure, $sdg_alignment){
            $sql = "UPDATE `business_details` SET `number_of_employees`='$number_of_employees',`formalised_structure`='$formalised_structure',`sdg_alignment`='$sdg_alignment' WHERE `business_id`='$business_id'";

            return $this->db_query($sql);
        }

        function delete_business($business_id){
            $sql = "DELETE FROM `business` WHERE `business_id`='$business_id'";

            return $this->db_query($sql);
        }

        /**
         * select businesses for a particular dpt
         */

        function select_business_for_dpt($department){
            $sql = "SELECT * FROM `business` WHERE department_id = '$department'";

            return $this->db_fetch_all($sql);
        }

        /**
         * select all businesses
         */
        function select_business(){
            $sql = "SELECT * FROM `business`";

            return $this->db_fetch_all($sql);
        }

        /**
         * select one business under a dpt
         */
        function select_one_business_dpt($business_id, $department_id){
            $sql = "SELECT * FROM `business` WHERE `department_id` = '$department_id' and `business_id`='$business_id' ";

            return $this->db_fetch_one($sql);
        }

        
        function select_one_business($business_id){
            $sql = "SELECT * FROM `business` WHERE `business_id`='$business_id' ";

            return $this->db_fetch_one($sql);
        }

        /**
         * number of businesses currently in service
         */

        function number_of_businesses(){
            $sql = "SELECT * FROM `business` ";

            $this->db_fetch_all($sql);

            return $this->db_count();
        }

        /**
         * businesses started in a particular year
         */
        function number_of_business_in_year($year){
            $sql = "SELECT * FROM `business` WHERE `year_started` = '$year'  ";

            $this->db_fetch_all($sql);

            return $this->db_count();
        }



        // BUSINESS REVENUE


        /**
         * business revenue ordered by years
         */ 
       


        function select_business_revenue(){
            $sql = "SELECT * FROM `business_revenue`";

            return $this->db_fetch_all($sql);
        }

        /**
         * This is to calculate the total revenue
         * for a particular business
         */

        function total_one_business_revenue($business_id){
            $sql = "SELECT SUM(revenue_amount) FROM `business_revenue` WHERE `business_id`= '$business_id'";

            return $this->db_fetch_one($sql);
        }

        /**
         * total business revenue for a business 
         * all years
         */
        function total_business_revenue(){
            $sql = "SELECT SUM(revenue_amount) FROM `business_revenue`";

            return $this->db_fetch_one($sql);
        }

        /**
         * total business revenue for a business 
         * one years
         */
        function total_business_revenue_for_a_year($business_id, $year){
            $sql = "SELECT SUM(revenue_amount) FROM `business_revenue` WHERE `business_id`= '$business_id' and `revenue_year`= '$year'";

            return $this->db_fetch_one($sql);
        }


        /**
         * insert into the business_Revenue
         */
        function report_business_revenue($business_id, $amount, $year){
            $sql = "INSERT INTO `business_revenue`(`business_id`, `revenue_amount`, `revenue_year`) VALUES ('$business_id','$amount','$year'";
            return $this->db_query($sql);
        }

        function update_business_revenue($business_id, $amount, $year){
            $sql = "UPDATE `business_revenue` SET `revenue_amount`=' $amount',`revenue_year`='$year' WHERE and `business_id`='$business_id'";
            return $this->db_query($sql);
        }

        function delete_business_revenue($business_id){
            $sql = "DELETE FROM `business_revenue` WHERE `business_id`='$business_id' ";
            return $this->db_query($sql);
        }
        
        /**
         * show one business revenue ordered by year
         */
        function select_one_business_revenue($business_id){
            $sql = "SELECT `revenue_amount` FROM `business_revenue` WHERE `business_id`= '$business_id'";
            return $this->db_fetch_all($sql);
        }

        /**
         * business revenue for a year
         */
        function business_revenue_in_year($year){
            $sql = "SELECT SUM(revenue_amount) FROM `business_revenue` WHERE `revenue_year`= '$year'";
            return $this->db_fetch_all($sql);
        }

        /**
         * stakeholder business
         */
        function stakeholder_business($business_id){
            $sql = "";
            return $this->db_fetch_all($sql);
        }

        function stakeholder_id_business($stakeholder_id){
            $sql = "";
            return $this->db_fetch_all($sql);
        }

        function insert_stakeholder_business($stakeholder_id, $business_id){
            $sql = "";
            return $this->db_query($sql);
        }

        function delete_stakeholder_business($stakeholder_id, $business_id){
            $sql = "";
            return $this->db_query($sql);
        }

        function update_stakeholder_business($stakeholder_id, $business_id){
            $sql = "";
            return $this->db_query($sql);
        }

       
    }
?>