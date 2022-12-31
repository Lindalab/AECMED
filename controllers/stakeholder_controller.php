<?php 
    require_once dirname(__FILE__)."/../classes/stakeholder_class.php";

    function create_stakeholder_ctr($fname, $lname, $role, $gender, $email, $phone_number,$stakeholder_image){
        $user = new Stakeholder;
        return $user->create_stakeholder($fname, $lname, $role, $gender, $email, $phone_number,$stakeholder_image);
    }

    function update_stakeholder_ctr($stakeholder_id, $fname, $lname, $role, $gender, $email, $phone_number){
        $user = new Stakeholder;
        return $user->update_stakeholder($stakeholder_id, $fname, $lname, $role, $gender, $email, $phone_number);
    }

    function delete_stakeholder_ctr($stakeholder_id){
        $user = new Stakeholder;
        return $user->delete_stakeholder($stakeholder_id);
    }

    function select_all_stakeholders_ctr(){
        $user = new Stakeholder;
        return $user->select_all_stakeholders();
    }

    function select_one_stakeholder_ctr($stakeholder_id){
        $user = new Stakeholder;
        return $user->select_one_stakeholder($stakeholder_id);
    }

    function select_one_stakeholder_email_ctr($email){
        $user = new Stakeholder;
        return $user->select_one_stakeholder_email($email);
    }

    function insert_stakeholder_module_ctr($stakeholder_id,$module_id){
        $user= new Stakeholder;
        return $user->insert_stakeholder_module($stakeholder_id,$module_id);
    }
    function number_of_avi_fellows(){
        $user= new Stakeholder;
        return $user->number_of_avi_fellows();
    }

    function get_avi_fellows_ctr(){
        $user = new Stakeholder;
        return $user->get_avi_fellows();
    }
?>