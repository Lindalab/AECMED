<?php 
    require_once("../classes/department_class.php");

    function create_department_ctr($department_name){
        $dpt = new Department;
        return $dpt->create_department($department_name);
    }

    function update_department_ctr($department_id, $department_name){
        $dpt = new Department;
        return $dpt->update_department($department_id, $department_name);
    }

    function delete_department_ctr($department_id){
        $dpt = new Department;
        return $dpt->delete_department($department_id);
    }

    function select_all_department_ctr(){
        $dpt = new Department;
        return $dpt->select_all_department();
    }

    function select_one_department_ctr($department_id){
        $dpt = new Department;
        return $dpt->select_one_department($department_id);
    }

?>