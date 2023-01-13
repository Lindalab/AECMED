<?php
require_once dirname(__FILE__)."/../settings/db_class.php";

class Grant extends db_connection
{

    function create_grant($grant_name, $grant_type, $date_received, $grant_desc, $image, $department_id, $amount)
    {
        $sql = "INSERT INTO `grants`(`grant_name`, `grant_type`, `date_received`, `grant_description`, `grant_company_image`, `department_id`, `amount`) VALUES ('$grant_name','$grant_type','$date_received','$grant_desc','$image','$department_id','$amount')";
        return $this->db_query($sql);
    }

    function update_grant($grant_id, $grant_name, $grant_type, $date_received, $grant_desc,  $department_id, $amount)
    {
        $sql = "UPDATE `grants` SET`grant_name`='$grant_name',`grant_type`='$grant_type',`date_received`= '$date_received',`grant_description`='$grant_desc',`department_id`='$department_id',`amount`='$amount' WHERE `grant_id`='$grant_id'";
        
        return $this->db_query($sql);
    }

    function delete_grant($grant_id)
    {
        $sql = "DELETE FROM `grants` WHERE `grant_id`='$grant_id' ";
        return $this->db_query($sql);
    }

    function select_all_grant()
    {
        $sql = "SELECT * FROM `grants`";
        return $this->db_fetch_all($sql);
    }

    function select_one_grant($grant_id)
    {
        $sql = "SELECT * FROM `grants` WHERE `grant_id`='$grant_id' ";
        return $this->db_fetch_one($sql);
    }

    //list grant for a department

    function select_grant_for_dpt($department_id)
    {
        $sql = "SELECT * FROM `grants` WHERE `department_id`=' $department_id' ";

        return $this->db_fetch_all($sql);
    }

    function select_grant_for_dpt_ordered_by_amount($department){
        $sql = "SELECT * FROM `grants` WHERE `department_id`=' $department' ORDER BY amount DESC ";

        return $this->db_fetch_all($sql);
    }

    // sum grant for a department
    function sum_grant_for_dpt($department_id)
    {
        $sql = "SELECT SUM(amount) as amount FROM `grants` WHERE department_id= '$department_id'";

        return $this->db_fetch_one($sql);
    }

    function sum_all_grant(){
        $sql = "SELECT SUM(amount) as amount FROM `grants`";

        return $this->db_fetch_one($sql);
    }


    // list grant for a particular year
    function select_grant_per_year($year)
    {
        $sql = "SELECT * FROM `grants` WHERE EXTRACT(YEAR FROM date_received)= '$year'";

        return $this->db_fetch_all($sql);
    }

 
    // sum of grant for a particular year
    function sum_grant_for_year($year)
    {
        $sql = "SELECT SUM(amount) FROM `grants` WHERE EXTRACT(YEAR FROM date_received)= '$year' ";

        return $this->db_fetch_one($sql);
    }

    //list of grant for a department in a year
    function grant_department_in_year($department_id,$year){
        $sql = "SELECT * FROM `grants` WHERE department_id= '$department_id' and EXTRACT(YEAR FROM date_received)= '$year' ";

        return $this->db_fetch_all($sql);
    }

    function grant_department_over_years($department_id,$year){
        $sql = "SELECT EXTRACT(YEAR FROM date_received) as year, SUM(amount) as amount FROM `grants` WHERE department_id= '$department_id' and EXTRACT(YEAR FROM date_received) >= '$year' GROUP BY EXTRACT(YEAR FROM date_received)";

        return $this->db_fetch_all($sql);
    }

    function sum_grant_type_department_over_years($type, $department_id, $year){
        $sql = "SELECT EXTRACT(YEAR FROM date_received) as year, SUM(amount) as amount FROM `grants` WHERE department_id= '$department_id' and grant_type = $type and EXTRACT(YEAR FROM date_received) >= '$year' GROUP BY EXTRACT(YEAR FROM date_received)";

        return $this->db_fetch_all($sql);
    }

    function grant_department_and_type($department_id,$type){
        $sql = "SELECT  SUM(amount) as amount FROM `grants` WHERE department_id= '$department_id' and  grant_type = $type";

        return $this->db_fetch_one($sql);
    }

    function list_grant_type_and_department($department_id, $type){
        $sql = "SELECT  * FROM `grants` WHERE department_id= '$department_id' and  grant_type = $type";

        return $this->db_fetch_all($sql);
    }

    function list_grant_type_and_department_by_amount($department_id, $type){
        $sql = "SELECT  * FROM `grants` WHERE department_id= '$department_id' and  grant_type = $type  ORDER BY amount DESC";

        return $this->db_fetch_all($sql);
    }

    function count_grant_type_and_department($department_id, $type){
        $sql = "SELECT  * FROM `grants` WHERE department_id= '$department_id' and  grant_type = $type";

         $this->db_fetch_all($sql);

         return $this->db_count();
    }

    function grant_type_for_department($department){
        $sql = "SELECT  grant_type, SUM(amount) as amount FROM `grants` WHERE department_id= '$department' GROUP BY grant_type";
        return $this->db_fetch_all($sql);
    }


    // PROJECTS

    // Sum of funds for a project
    function sum_grant_for_project($project_id)
    {
        $sql = "SELECT  SUM(amount) as amount FROM `project_grants` WHERE `project_id`='$project_id' ";

        return $this->db_fetch_one($sql);
    }

    function sum_grant_for_project_under_dpt($department){
        $sql = "SELECT  SUM(amount) as amount FROM `project_grants`, project WHERE project.department_id = $department ";

        return $this->db_fetch_one($sql);
    }


    // list funds for a project
    function grant_for_project($project_id){
        $sql = "SELECT *, project_grants.amount as project_amount FROM `grants`,project_grants WHERE project_grants.grant_id=grants.grant_id and project_grants.project_id='$project_id'";

        return $this->db_fetch_all($sql);
    }

    function count_grant_for_project($grant_id){
        $sql = "SELECT project_grants.grant_id, project_grants.amount as number FROM `grants`,project_grants WHERE project_grants.grant_id=grants.grant_id and grants.grant_id = $grant_id;";
        
        $this->db_fetch_all($sql);

        return $this->db_count();
    }

    // list of funds for a project in a year
    function grant_for_project_per_year($project_id, $year){
        $sql = "SELECT * FROM `grants`,`project_grants` WHERE project_grants.grant_id=grants.grant_id and project_grants.project_id='$project_id' and  EXTRACT(YEAR FROM grants.date_received)= '$year' ";

        return $this->db_fetch_all($sql);
    }




    // BUSINESS

    // list of grant for business

    function business_grant(){
        $sql = "SELECT * FROM `business`,business_grants WHERE business_grants.business_id= business.business_id;";

        return $this->db_fetch_all($sql);
    }


    function grant_for_a_business($business_id){
        $sql = "SELECT *, business_grants.amount as amount_received FROM `grants`,business_grants,business WHERE business.business_id=business_grants.business_id and  grants.grant_id=business_grants.grant_id  and business_grants.business_id='$business_id' ";

        return $this->db_fetch_all($sql);
    }

    function count_business_received_grant($grant){
        $sql = "SELECT grants.grant_id, grants.amount FROM grants, business_grants where grants.grant_id = business_grants.grant_id  and grants.grant_id = $grant";
        $this->db_fetch_all($sql);

        return $this->db_count($sql);

    }

    function total_grant_for_a_business($business_id){
        $sql = "SELECT SUM(business_grants.amount) as amount FROM `grants`,business_grants,business WHERE business.business_id=business_grants.business_id and  grants.grant_id=business_grants.grant_id  and business_grants.business_id='$business_id' GROUP BY business_grants.business_id;";

        return $this->db_fetch_one($sql);
    }

    function total_grant_for_business_in_dpt_ctr($department){
        $sql = "SELECT SUM(business_grants.amount) as amount FROM `grants`,business_grants,business WHERE business.business_id=business_grants.business_id and  grants.grant_id=business_grants.grant_id  and business.department_id='$department'";

        return $this->db_fetch_one($sql);
    }


    function grant_for_a_business_per_year($business_id, $year){
        $sql = "SELECT * FROM `business_grants` WHERE business_id='$business_id' and EXTRACT(YEAR FROM grants.date_received)= '$year'  ";

        return $this->db_fetch_all($sql);
    }

    function sum_of_business_grant($business_id){
        $sql = "SELECT SUM(amount) FROM `business_grants` WHERE business_id='$business_id'";

        return $this->db_fetch_one($sql);
    }

    function sum_of_business_grant_per_year($business_id,$year){
        $sql = "SELECT SUM(amount) FROM `business_grants` WHERE business_id='$business_id' and EXTRACT(YEAR FROM grants.date_received)= '$year' ";
        return $this->db_fetch_one($sql);
    }

    function number_of_project_grant($department, $type){
        $sql = "SELECT COUNT(project_id) as number FROM `project_grants`, grants WHERE project_grants.grant_id = grants.grant_id and grants.department_id = $department and grants.grant_type = $type;";
        
        return $this->db_fetch_one($sql);
    }

    function number_of_business_grants($department, $type){
        $sql = "SELECT COUNT(business_grants.grant_id) as number FROM `business_grants`, grants WHERE business_grants.grant_id=grants.grant_id and grants.department_id = $department and grants.grant_type = $type";
        
        return $this->db_fetch_one($sql);
    }

    function list_sum_grant_per_year(){
        $sql = "SELECT EXTRACT(YEAR FROM date_received) as year,SUM(amount) as amount FROM `grants` GROUP BY  EXTRACT(YEAR FROM date_received) ;";

        return $this->db_fetch_all($sql);


    }

    /**
     * Add project grant
     * 
     */

     function add_grant_project(){

     }

     function delete_grant_project(){

     }

     function update_grant_project(){

     }

    /**
     * business grant
     * 
     */

     function add_business_grant(){

     }

     function update_business_grant(){

     }

     function delete_business_grant($business_id, $grant_id, $date_received){
        $sql = "DELETE FROM `business_grants` WHERE grant_id = '$grant_id' and business_id = '$business_id' and date = '$date_received'";

        return $this->db_query($sql);
     }
}
