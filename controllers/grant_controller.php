<?php 

    require_once("../classes/grant_class.php");

    function create_grant_ctr($grant_name, $grant_type, $date_received, $grant_desc, $image, $department_id, $amount){
        $grant = new Grant;
        return $grant->create_grant($grant_name, $grant_type, $date_received, $grant_desc, $image, $department_id, $amount);
    }

    function update_grant_ctr($grant_id, $grant_name, $grant_type, $date_received, $grant_desc,$department_id, $amount){
        $grant = new Grant;
        return $grant->update_grant($grant_id, $grant_name, $grant_type, $date_received, $grant_desc,  $department_id, $amount);
    }

    function delete_grant_ctr($grant_id){
        $grant = new Grant;
        return $grant->delete_grant($grant_id);
    }

    function select_all_grant_ctr(){
        $grant = new Grant;
        return $grant->select_all_grant();
    }

    function select_one_grant_ctr($grant_id){
        $grant = new Grant;
        return $grant->select_one_grant($grant_id);
    }

    function select_grant_for_dpt_ctr($department_id){
        $grant = new Grant;
        return $grant->select_grant_for_dpt($department_id);
    }

    function sum_grant_for_dpt_ctr($department_id){
        $grant = new Grant;
        return $grant->sum_grant_for_dpt($department_id);
    }

    function select_grant_per_year_ctr($year){
        $grant = new Grant;
        return $grant->select_grant_per_year($year);
    }

    function sum_grant_for_year_ctr($year){
        $grant = new Grant;
        return $grant->sum_grant_for_year($year);
    }

    function grant_department_in_year_ctr($department_id,$year){
        $grant = new Grant;
        return $grant->grant_department_in_year($department_id,$year);
    }

    function grant_department_and_type_ctr($department_id,$type){
        $grant = new Grant;
        return $grant->grant_department_and_type($department_id,$type);
    }

    function sum_grant_for_project_ctr($project_id){
        $grant = new Grant;
        return $grant-> sum_grant_for_project($project_id);
    }

    function grant_for_project_ctr($project_id){
        $grant = new Grant;
        return $grant->grant_for_project($project_id);
    }

    function grant_for_project_per_year_ctr($project_id, $year){
        $grant = new Grant;
        return $grant->grant_for_project_per_year($project_id, $year);
    }

    function business_grant_ctr(){
        $grant = new Grant;
        return $grant->business_grant();
    }

    function grant_for_a_business_ctr($business_id){
        $grant = new Grant;
        return $grant->grant_for_a_business($business_id);
    }

    function grant_for_a_business_per_year_ctr($business_id, $year){
        $grant = new Grant;
        return $grant->grant_for_a_business_per_year($business_id, $year);
    }

    function sum_of_business_grant_ctr($business_id){
        $grant = new Grant;
        return $grant->sum_of_business_grant($business_id);
    }

    function sum_of_business_grant_per_year_ctr($business_id,$year){
        $grant = new Grant;
        return $grant->sum_of_business_grant_per_year($business_id,$year);
    }
?>