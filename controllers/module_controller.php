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

?>