<?php 
    require_once dirname(__FILE__)."/../settings/db_class.php";

    class Business extends db_connection{

        /**
         * create new business 
         */
        function create_business($year_started, $business_name,$business_logo, $business_location, $business_contact, $business_email,$department, $sector, $business_description){
            
            $sql = "INSERT INTO `business`(`year_started`, `busines_name`, `business_logo`, `business_location`, `business_contact`, `business_email`, `department_id`,  `sector`, `business_description`) VALUES ('$year_started',' $business_name','$business_logo','$business_location',' $business_contact','$business_email','$department','$sector','$business_description')";

            return $this->db_query($sql);
        }

        function create_business_details($business_id,$number_of_employees, $formalised_structure, $sdg_alignment){
            
            $sql = "INSERT INTO `business_details`(`business_id`, `number_of_employees`,`formalised_structure`, `sdg_alignment`) VALUES ('$business_id','$number_of_employees','$formalised_structure','$sdg_alignment')";

            return $this->db_query($sql);
        }

        function add_business_grant($grant_id,$business_id, $amount){
            $sql = "INSERT INTO `business_grants`(`grant_id`, `business_id`, `amount`) VALUES ('$grant_id','$business_id','$amount')";

            return $this->db_query($sql);
        }

        /**
         * updates details of the business
         */
        function update_business($business_id, $year_started, $business_name, $business_location, $business_contact, $business_email,$department, $sector, $business_description,$business_status){
            $sql = "UPDATE `business` SET `year_started`='$year_started',`busines_name`='$business_name',`business_location`='$business_location',`business_contact`='$business_contact',`business_email`='$business_email',`department_id`='$department',`sector`='$sector',`business_description`='$business_description',`business_status`='$business_status' WHERE `business_id`='$business_id'";

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

        function select_one_business_email($email){
            $sql = "SELECT * FROM `business` WHERE `business_email`='$email'";
            return $this->db_fetch_one($sql);
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



        


        function number_of_businesses_department($department){
            $sql = "SELECT * FROM `business` where department_id = '$department'";

            $this->db_fetch_all($sql);

            return $this->db_count();
        }

        function number_of_businesses_by_gender($department_id, $gender){
            $sql = "SELECT DISTINCT(stakeholder_business.stakeholder_id) FROM stakeholder_business,stakeholder,business WHERE business.business_id=stakeholder_business.business_id and stakeholder_business.stakeholder_id=stakeholder.stakeholder_id and stakeholder.gender='$gender' and business.department_id = $department_id ";
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

        function business_revenue_last_four_years($department, $year){
            $sql = "SELECT business_revenue.revenue_year as year, SUM(business_revenue.revenue_amount) as revenue FROM business_revenue, business where business.business_id = business_revenue.business_id and business_revenue.revenue_year >= $year and business.department_id = $department GROUP BY business_revenue.revenue_year;";

            return $this->db_fetch_all($sql);
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
            $sql = "SELECT SUM(revenue_amount) as amount FROM `business_revenue` WHERE `business_id`= '$business_id'";

            return $this->db_fetch_one($sql);
        }

        /**
         * total business revenue for a business 
         * all years
         */
        function total_business_revenue(){
            $sql = "SELECT SUM(revenue_amount) as amount FROM `business_revenue`";

            return $this->db_fetch_one($sql);
        }

        function total_business_revenue_by_type($busines_type){
            $sql = "SELECT SUM(business_revenue.revenue_amount) as amount FROM `business_revenue`,`business` WHERE business.business_id=business_revenue.business_id and
            business.business_type='$busines_type';";

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

        function total_business_revenue_for_a_department($department){
            $sql = "SELECT busines_name, SUM(revenue_amount) as amount FROM `business_revenue`, business WHERE business.business_id = business_revenue.business_id and business.department_id = $department;";

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

        function select_all_business_revenue($department_id){
            $sql = "SELECT SUM(business_revenue.revenue_amount) as amount FROM `business_revenue`,business WHERE business.department_id= '$department_id'";
            return $this->db_fetch_one($sql);
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
            $sql = "SELECT * FROM stakeholder_business,stakeholder,business WHERE stakeholder_business.stakeholder_id=stakeholder.stakeholder_id and stakeholder_business.business_id=business.business_id and stakeholder_business.business_id= '$business_id' ";
            return $this->db_fetch_all($sql);
        }

        function stakeholder_id_business($stakeholder_id){
            $sql = "SELECT * FROM stakeholder_business,stakeholder,business WHERE stakeholder_business.stakeholder_id=stakeholder.stakeholder_id and stakeholder_business.business_id=business.business_id and stakeholder_business.stakeholder_id= '$stakeholder_id'";
            return $this->db_fetch_all($sql);
        }

        function insert_stakeholder_business($stakeholder_id, $business_id){
            $sql = "INSERT INTO `stakeholder_business`(`stakeholder_id`, `business_id`) VALUES ('$stakeholder_id','$business_id')";
            return $this->db_query($sql);
        }

        function delete_stakeholder_business($stakeholder_id, $business_id){
            $sql = "DELETE FROM `stakeholder_business` WHERE `stakeholder_id`='$stakeholder_id' and  `business_id`='$business_id' ";
            return $this->db_query($sql);
        }

        function update_stakeholder_business($stakeholder_id, $business_id){
            $sql = "UPDATE `stakeholder_business` SET `stakeholder_id`='$stakeholder_id',`business_id`='$business_id' WHERE `stakeholder_id`='$stakeholder_id' and `business_id`='$business_id' ";
            return $this->db_query($sql);
        }

        function business_data(){
            $sql="SELECT business.business_id as business_id,business.busines_name as business_name,business.year_started as year_started ,SUM(business_revenue.revenue_amount) as total_revenue,business_details.number_of_employees as number_of_employees,
            business.business_description as business_description,
            business.business_logo as business_logo ,
            business.business_email as business_email,
            business.sector as sector,
            business.business_contact as business_contact,
            business_details.formalised_structure as formalised_structure, business_details.sdg_alignment as sdg_alignment
            FROM business,business_revenue,business_details where business.business_id=business_revenue.business_id and business.business_id=business_details.business_id and business.department_id= 1 GROUP BY business.business_id;
             ";
            return $this->db_fetch_all($sql);
        }

        function abusiness_data($business_id){
            $sql="SELECT  DISTINCT( business.business_id) as business_id,business.busines_name as business_name, business.business_description as business_description, business.business_logo as business_logo , business.business_email as business_email, business.sector as sector, business.business_contact as business_contact, business_details.formalised_structure as formalised_structure, business_details.sdg_alignment as sdg_alignment FROM business,business_revenue,business_details where business.business_id=business_revenue.business_id and business.business_id=business_details.business_id and business.department_id= 1 and business.business_id =$business_id";
            return $this->db_fetch_one($sql);
        }

        // function business_data($department_name){
        //     $sql="SELECT * FROM business_revenue,business_grants,business_details,business,stakeholder_business,stakeholder,department 
        //     where business.business_id=business_revenue.business_id 
        //     and business.business_id= business_grants.grant_id 
        //     and business.business_id=business_details.business_id
        //     and business.business_id=stakeholder_business.business_id
        //     and stakeholder.stakeholder_id=stakeholder_business.stakeholder_id
        //     and business.department_id= department.department_id
        //     and department.department_name='$department_name' ";
        //     return $this->db_query($sql);
        // }


        function business_employment_created($business_id){
            $sql = "SELECT SUM(business_details.number_of_employees) as number FROM business_details where business_id=$business_id GROUP BY business_details.business_id;";

            return $this->db_fetch_one($sql);
        }

        function business_employment_created_by_dpt($department_id){
            $sql = "SELECT SUM(business_details.number_of_employees) as numbers FROM business_details,business where business.department_id='$department_id' ";

            return $this->db_fetch_one($sql);
        }

        function total_business_employment_created(){
            $sql = "SELECT SUM(business_details.number_of_employees) as number FROM business_details GROUP BY business_details.business_id;";

            return $this->db_fetch_one($sql);
        }

        function business_employment_created_by_dpt_ctr($department_id){
            
        }
        
        

       
    }
?>