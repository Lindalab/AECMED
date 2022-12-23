<?php 
    require_once("../classes/stakeholder_class.php");

    function create_stakeholder_ctr($fname, $lname, $role, $gender, $email, $phone_number,$stakeholder_image){
        $user = new Stakeholder;
        return $user->create_stakeholder($fname, $lname, $role, $gender, $email, $phone_number,$stakeholder_image);
    }

    function update_stakeholder_ctr($stakeholder_id, $fname, $lname, $role, $gender, $email, $phone_number,$stakeholder_image){
        $user = new Stakeholder;
        return $user->update_stakeholder($stakeholder_id, $fname, $lname, $role, $gender, $email, $phone_number,$stakeholder_image);
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
?>