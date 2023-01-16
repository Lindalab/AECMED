<?php 

require_once dirname(__FILE__)."/../classes/business_class.php";

    function create_business_ctr($year_started, $business_name,$business_logo, $business_location, $business_contact, $business_email,$department, $sector, $business_description){
        $business = new Business;
        return $business->create_business($year_started, $business_name,$business_logo, $business_location, $business_contact, $business_email,$department, $sector, $business_description);
    }

    function create_business_details_ctr($business_id,$number_of_employees, $formalised_structure, $sdg_alignment){
        $business = new Business;
        return $business->create_business_details($business_id,$number_of_employees, $formalised_structure, $sdg_alignment);
    }

    function add_business_grant_ctr($grant_id,$business_id, $amount, $date){
        $business= new Business;
        return $business->add_business_grant($grant_id,$business_id, $amount, $date);
    }

    function update_business_ctr($business_id, $year_started, $business_name, $business_location, $business_contact, $business_email,$department, $sector, $business_description){
        $business = new Business;
        return $business->update_business($business_id, $year_started, $business_name, $business_location, $business_contact, $business_email,$department, $sector, $business_description);
    }

    function update_business_details_ctr($business_id,$number_of_employees, $formalised_structure, $sdg_alignment){
        $business= new Business;
        return $business->update_business_details($business_id,$number_of_employees, $formalised_structure, $sdg_alignment);
    }

    function delete_business_ctr($business_id){
        $business = new Business;
        return $business->delete_business($business_id);
    }

    function select_one_business_email_ctr($email){
        $business = new Business;
        return $business->select_one_business_email($email);
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

    function total_business_revenue_ctr(){
        $business = new Business;
        return $business->total_business_revenue();
    }

    function total_business_revenue_for_a_year_ctr($business_id, $year){
        $business = new Business;
        return $business->total_business_revenue_for_a_year($business_id, $year);
    }

    function total_business_revenue_for_a_department($department){
        $business = new Business;
        return $business->total_business_revenue_for_a_department($department);
    }

    function report_business_revenue_ctr($business_id, $amount, $year){
        $business = new Business;
        return $business->report_business_revenue($business_id, $amount, $year);
    }
     

    function update_business_revenue_ctr($business_id, $amount, $year, $old_amount, $old_year){
        $business = new Business;
        return $business->update_business_revenue($business_id, $amount, $year, $old_amount, $old_year);
    }

    function delete_business_revenue_ctr($business_id, $year, $amount){
        $business = new Business;
        return $business->delete_business_revenue($business_id, $year, $amount);
    }

    function select_one_business_revenue($business_id){
        $business = new Business;
        return $business->select_one_business_revenue($business_id);
    }


    function business_revenue_in_year_ctr($year){
        $business = new Business;
        return $business->business_revenue_in_year($year);
    }

    function number_of_businesses_ctr(){
        $business = new Business;
        return $business->number_of_businesses();
    }

   
    function number_of_businesses_department_ctr($department){
        $business = new Business;
        return $business->number_of_businesses_department($department);
    }

    function  number_of_businesses_by_gender_ctr($department_id, $gender){
        $business =new Business;
        return $business->number_of_businesses_by_gender($department_id,$gender);
    }

    function number_of_business_in_year_ctr($year){
        $business = new Business;
        return $business->number_of_business_in_year($year);
    }

    function number_of_business_in_year_under_dpt_ctr($department,$year){
        $business = new Business;
        return $business->number_of_business_in_year_under_dpt($department,$year);
    }

    function business_revenue_last_four_years_ctr($department,$year){
        $business = new Business;
        return $business->business_revenue_last_four_years($department, $year);
    }

    function business_revenue_in_a_year_ctr($department,$year){
        $business = new Business;
        return $business->business_revenue_in_a_years($department, $year);
    }

    function stakeholder_business($business_id){
        $business = new Business;
        return $business->stakeholder_business($business_id);
    }

    function stakeholder_id_business($stakeholder_id){
        $business = new Business;
        return $business->stakeholder_id_business($stakeholder_id);
    }

    function insert_stakeholder_business_ctr($stakeholder_id, $business_id){
        $business = new Business;
        return $business->insert_stakeholder_business($stakeholder_id, $business_id);
    }

    function delete_stakeholder_business_ctr($stakeholder_id, $business_id){
        $business = new Business;
        return $business->delete_stakeholder_business($stakeholder_id, $business_id);
    }

    function update_stakeholder_business_ctr($stakeholder_id, $business_id){
        $business = new Business;
        return $business->update_stakeholder_business($stakeholder_id, $business_id);
    }

    function business_data_ctr($department){
        $business= new Business;
        return $business->business_data($department);
    }

    function total_business_revenue_by_type_ctr($busines_type){
        $business=new Business;
        return $business->total_business_revenue_by_type($busines_type);
    }
    function business_employment_created_ctr($business_id){
        $business= new Business;
        return $business->business_employment_created($business_id);
    }

    function select_all_business_revenue_ctr($department_id){
        $business=new Business;
        return $business->select_all_business_revenue($department_id);
    }

    function business_employment_created_by_dpt_ctr($department_id){
        $business = new Business;
        return $business->business_employment_created_by_dpt($department_id);
    }
    function abusiness_data($business_id){
        $business=new Business;
        return $business->abusiness_data($business_id);
    }
    function total_business_employment_created_ctr(){
        $business= new Business;
        return $business->total_business_employment_created();
    }

    function  business_employment_created_in_year_ctr($department_id, $year){
        $business = new Business;
        return $business->business_employment_created_in_year($department_id, $year);
    }

    function total_business_revenue_years_ctr(){
        $business = new Business;
        return $business->total_business_revenue_years();
    }
   
  
    
?>