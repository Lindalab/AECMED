<?php
require_once("../settings/db_class.php");

class Grant extends db_connection
{

    function create_grant($grant_name, $grant_type, $date_received, $grant_desc, $image, $department_id, $amount)
    {
        $sql = "";
        return $this->db_query($sql);
    }

    function update_grant($grant_id, $grant_name, $grant_type, $date_received, $grant_desc, $image, $department_id, $amount)
    {
        $sql = "";
        return $this->db_query($sql);
    }

    function delete_grant($grant_id)
    {
        $sql = "";
        return $this->db_query($sql);
    }

    function select_all_grant()
    {
        $sql = "";
        return $this->db_fetch_all($sql);
    }

    function select_one_grant($grant_id)
    {
        $sql = "";
        return $this->db_fetch_one($sql);
    }

    // grant for a department

    function select_grant_for_dpt($department_id)
    {
        $sql = "";

        return $this->db_fetch_all($sql);
    }

    // sum grant for a department
    function sum_grant_for_dpt($department_id)
    {
        $sql = "";

        return $this->db_fetch_one($sql);
    }

    // list grant for a particular year
    function select_grant_per_year($year)
    {
        $sql = "";

        return $this->db_fetch_all($sql);
    }

    // sum of grant for a particular year
    function sum_grant_for_year($year)
    {
        $sql = "";

        return $this->db_fetch_one($sql);
    }

    // PROJECTS

    // Sum of funds for a project
    function sum_grant_for_project($project_id)
    {
        $sql = "";

        return $this->db_fetch_one($sql);
    }

    //list funds for a project
    function grant_for_project($project_id){
        $sql = "";

        return $this->db_fetch_all($sql);
    }

    // lisr of  funds for a project in a year
    function grant_for_project_per_year($project_id, $year){

    }
}
