<?php 

    require_once("../classes/business_class.php");

    function create_business_ctr($date_started, $business_name, $business_location, $number_of_employees, $formalised_structure, $sector_of_business, $sdg_alignment, $department, $business_type, $business_description){
        $business = new Business;
        return $business->create_business($date_started, $business_name, $business_location, $number_of_employees, $formalised_structure, $sector_of_business, $sdg_alignment, $department, $business_type, $business_description);
    }

    function update_business_details_ctr($business_id, $date_started, $business_name, $business_location, $number_of_employees, $formalised_structure, $sector_of_business, $sdg_alignment, $department, $business_type, $business_description){
        $business = new Business;
        return $business->update_business_details($business_id, $date_started, $business_name, $business_location, $number_of_employees, $formalised_structure, $sector_of_business, $sdg_alignment, $department, $business_type, $business_description);
    }

    function delete_business_ctr($business_id){
        $business = new Business;
        return $business->delete_business($business_id);
    }

    function select_business_for_dpt_ctr($department){
        $business = new Business;
        return $business->select_business_for_dpt($department);
    }

    function select_business_ctr(){
        $business = new Business;
        return $business->select_business();
    }

    function select_one_business_dpt_ctr($business_id, $department_id){
        $business = new Business;

        return $business->select_one_business_dpt($business_id, $department_id);
    }

    function select_one_business_ctr($business_id){
        $business = new Business;
        return $business->select_one_business($business_id);
    }

    function select_business_revenue_ctr(){
        $business = new Business;
        return $business->select_business_revenue();
    }

    function total_one_business_revenue_ctr($business_id){
        $business = new Business;
        return $business->total_one_business_revenue($business_id);
    }

    function total_business_revenue_ctr($business_id){
        $business = new Business;
        return $business->total_business_revenue($business_id);
    }

    function total_business_revenue_for_a_year_ctr($business_id, $year){
        $business = new Business;
        return $business->total_business_revenue_for_a_year($business_id, $year);
    }

    function report_business_revenue_ctr($business_id, $amount, $year){
        $business = new Business;
        return $business->report_business_revenue($business_id, $amount, $year);
    }
     

    function update_business_revenue_ctr($business_id, $amount, $year){
        $business = new Business;
        return $business->update_business_revenue($business_id, $amount, $year);
    }

    function delete_business_revenue_ctr($business_id){
        $business = new Business;
        return $business->delete_business_revenue($business_id);
    }

    function select_one_business_revenue(){
        $business = new Business;
        return $business->select_one_business_revenue();
    }


    function business_revenue_in_year_ctr($year){
        $business = new Business;
        return $business->business_revenue_in_year($year);
    }

    
?>