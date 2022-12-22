<?php 
    require_once("../settings/db_class.php");

    class Business extends db_connection{

        /**
         * create new business 
         */
        function create_business($date_started, $business_name, $business_location, $number_of_employees, $formalised_structure, $sector_of_business, $sdg_alignment, $department, $business_type, $business_description){
            
            $sql = "";

            return $this->db_query($sql);
        }

        /**
         * updates details of the business
         */
        function update_business_details($business_id, $date_started, $business_name, $business_location, $number_of_employees, $formalised_structure, $sector_of_business, $sdg_alignment, $department, $business_type, $business_description){
            $sql = "";

            return $this->db_query($sql);
        }

        function delete_business($business_id){
            $sql = "";

            return $this->db_query($sql);
        }

        /**
         * select businesses for a particular dpt
         */

        function select_business_for_dpt($department){
            $sql = "";

            return $this->db_fetch_all($sql);
        }

        /**
         * select all businesses
         */
        function select_business(){
            $sql = "";

            return $this->db_fetch_all($sql);
        }

        /**
         * select one business under a dpt
         */
        function select_one_business_dpt($business_id, $department_id){
            $sql = "";

            return $this->db_fetch_one($sql);
        }

        
        function select_one_business($business_id){
            $sql = "";

            return $this->db_fetch_one($sql);
        }

        /**
         * number of businesses currently in service
         */

        function number_of_businesses(){
            $sql = "";

            $this->db_fetch_all($sql);

            return $this->db_count();
        }

        /**
         * businesses started in a particular year
         */
        function number_of_business_in_year($year){
            $sql = "";

            $this->db_fetch_all($sql);

            return $this->db_count();
        }



        // BUSINESS REVENUE


        /**
         * business revenue ordered by years
         */ 

        function select_business_revenue(){
            $sql = "";

            return $this->db_fetch_all($sql);
        }

        /**
         * This is to calculate the total revenue
         * for a particular business
         */
        function total_one_business_revenue($business_id){
            $sql = "";

            return $this->db_fetch_one($sql);
        }

        /**
         * total business revenue for a business 
         * all years
         */
        function total_business_revenue($business_id){
            $sql = "";

            return $this->db_fetch_one($sql);
        }

        /**
         * total business revenue for a business 
         * one years
         */
        function total_business_revenue_for_a_year($business_id, $year){
            $sql = "";

            return $this->db_fetch_one($sql);
        }


        /**
         * insert into the business_Revenue
         */
        function report_business_revenue($business_id, $amount, $year){
            $sql = "";
            return $this->db_query($sql);
        }

        function update_business_revenue($business_id, $amount, $year){
            $sql = "";
            return $this->db_query($sql);
        }

        function delete_business_revenue($business_id){
            $sql = "";
            return $this->db_query($sql);
        }
        
        /**
         * show one business revenue ordered by year
         */
        function select_one_business_revenue(){
            $sql = "";
            return $this->db_fetch_all($sql);
        }

        /**
         * business revenue for a year
         */
        function business_revenue_in_year($year){
            $sql = "";
            return $this->db_fetch_all($sql);
        }

    }
?>