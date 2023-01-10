<?php 

require_once dirname(__FILE__)."/../classes/grant_class.php";

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

    function select_grant_for_dpt_ordered_by_amount_ctr($department_id){
        $grant = new Grant;
        return $grant->select_grant_for_dpt_ordered_by_amount($department_id);
    }

    function sum_grant_for_dpt_ctr($department_id){
        $grant = new Grant;
        return $grant->sum_grant_for_dpt($department_id);
    }

    function sum_all_grant_ctr(){
        $grant = new Grant;
        return $grant->sum_all_grant();
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

    function grant_department_over_years_ctr($department_id,$year){
        $grant = new Grant;
        return $grant->grant_department_over_years($department_id,$year);
    }

    function sum_grant_type_department_over_years_ctr($type, $department_id, $year){
        $grant = new Grant;
        return $grant->sum_grant_type_department_over_years($type, $department_id, $year);
    }

    function grant_department_and_type_ctr($department_id,$type){
        $grant = new Grant;
        return $grant->grant_department_and_type($department_id,$type);
    }

    function list_grant_type_and_department_ctr($department_id, $type){
        $grant = new Grant;
        return $grant->list_grant_type_and_department($department_id, $type);
    }

    function list_grant_type_and_department_by_amount_ctr($department_id, $type){
        $grant = new Grant;
        return $grant->list_grant_type_and_department_by_amount($department_id, $type);
    }

    function count_grant_type_and_department_ctr($department_id, $type){
        $grant = new Grant;
        return $grant->count_grant_type_and_department($department_id, $type);
    }
    function grant_type_for_department_ctr($department){
        $grant = new Grant;
        return $grant->grant_type_for_department($department);
    }


    function sum_grant_for_project_ctr($project_id){
        $grant = new Grant;
        return $grant->sum_grant_for_project($project_id);
    }

    function sum_grant_for_project_under_dpt_ctr($department){
        $grant = new Grant;
        return $grant->sum_grant_for_project_under_dpt($department)['amount'];
    }

    function grant_for_project_ctr($project_id){
        $grant = new Grant;
        return $grant->grant_for_project($project_id);
    }

    function count_grant_for_project_ctr($grant_id){
        $grant = new Grant;
        $count = $grant->count_grant_for_project($grant_id);
        return $count;
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

    function count_business_received_grant_ctr($grant){
        $grant = new Grant;
        $count = $grant->count_business_received_grant($grant);
        return $count;
    }

    function total_grant_for_a_business_ctr($business_id){
        $grant = new Grant;
        return $grant->total_grant_for_a_business($business_id);
    }

    function total_grant_for_business_in_dpt_ctr($department){
        $grant = new Grant;
        $amount = $grant->total_grant_for_business_in_dpt_ctr($department);
        if($amount === NULL){
            return 0;
        }else{
            return $amount['amount'];
        }
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

    
    function number_of_project_grant_type($department, $type){
        $grant = new Grant;
        return $grant->number_of_project_grant($department, $type);
    }

    function number_of_business_grants_ctr($department, $type){
        $grant = new Grant;
        return $grant->number_of_business_grants($department, $type);
    }

    function list_sum_grant_per_year_ctr(){
        $grant = new Grant;
        return $grant->list_sum_grant_per_year();
    }



    function delete_business_grant_ctr($business_id, $grant_id, $date_received){
        $grant = new Grant;
        return $grant->delete_business_grant($business_id, $grant_id, $date_received);
    }
   
?>