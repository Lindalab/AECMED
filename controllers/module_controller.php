<?php 

require_once dirname(__FILE__)."/../classes/module_class.php";

    function create_module_ctr($module_name, $desc, $department_id){
        $module = new Module;
        return $module->create_module($module_name, $desc, $department_id);
    }

    function update_module_ctr($module_id, $module_name, $desc, $department_id){
        $module = new Module;
        return $module->update_module($module_id, $module_name, $desc, $department_id);
    }

    function delete_module_ctr($module_id){
        $module = new Module;
        return $module->delete_module($module_id);
    }

    function select_all_module_ctr(){
        $module = new Module;
        return $module->select_all_module();
    }

    function select_one_module_ctr($module_id){
        $module = new Module;
        return $module->select_one_module($module_id);
    }
    function number_of_modules_ctr(){
        $module = new Module;
        return $module->number_of_modules();
    }
    function module_data_ctr(){
        $module = new Module;
        return $module->module_data();
    }

    function count_module_stakeholders_ctr(){
        $module = new Module;
        return $module->count_module_stakeholders();  
    }

    function count_one_module_stakeholders_ctr($module_id){
        $module = new Module;
        return $module->count_one_module_stakeholders($module_id);  
    }
?>