<?php
require_once("../settings/db_class.php");

class Grant extends db_connection
{

    function create_grant($grant_name, $grant_type, $date_received, $grant_desc, $image, $department_id, $amount)
    {
        $sql = "INSERT INTO `grants`(`grant_name`, `grant_type`, `date_received`, `grant_description`, `grant_company_image`, `department_id`, `amount`) VALUES ('$grant_name','$grant_type','$date_received','$grant_desc','$image','$department_id','$amount')";
        return $this->db_query($sql);
    }

    function update_grant($grant_id, $grant_name, $grant_type, $date_received, $grant_desc, $image, $department_id, $amount)
    {
        $sql = "UPDATE `grants` SET`grant_name`='$grant_name',`grant_type`='$grant_type',`date_received`=' $date_received',`grant_description`='$grant_desc',`grant_company_image`='$image',`department_id`=' $department_id',`amount`='$amount' WHERE `grant_id`='$grant_id'";
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

    // sum grant for a department
    function sum_grant_for_dpt($department_id)
    {
        $sql = "SELECT SUM(amount) FROM `grants` WHERE department_id= '$department_id'";

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



    // PROJECTS

    // Sum of funds for a project
    function sum_grant_for_project($project_id)
    {
        $sql = "SELECT  SUM(amount) FROM `project_grants` WHERE `project_id`='$project_id' ";

        return $this->db_fetch_one($sql);
    }


    // list funds for a project
    function grant_for_project($project_id){
        $sql = "SELECT * FROM `grants`,project_grants WHERE project_grants.grant_id=grants.grant_id and project_grants.project_id='$project_id'";

        return $this->db_fetch_all($sql);
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
        $sql = "SELECT * FROM `grants`,business_grants,business WHERE business.business_id=business_grants.business_id and  grants.grant_id=business_grants.grant_id  and business_grants.business_id='$business_id' ";

        return $this->db_fetch_all($sql);
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
}
