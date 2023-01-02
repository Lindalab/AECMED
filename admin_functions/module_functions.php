<?php
require_once dirname(__FILE__) . "/../controllers/module_controller.php";

// print_r(showAllModule_fnc());

function showAllModule_fnc()
{
    $modules = select_all_module_ctr();
    foreach($modules as $module){
        $module_id = $module['module_id'];
        $totalStudents = count_one_module_stakeholders_ctr($module_id);
        showSingleModule($module_id,$module['module_name'],$totalStudents);
    }
}

function showSingleModule($module_id,$moduleName,$totalStudents)
{

    echo "
    <tr>
        <td>
            $moduleName
        </td>
        <td>
            $totalStudents
        </td>
        <td>
        <a href='modules view.php?module_id=$module_id'>
        <button class='btn btn-outline-info'>View</button>
    </a>
    <a href='../../forms/edit/edit-module.php'>
        <button class='btn btn-outline-warning'>Edit</button>
    </a>
    <button class='btn btn-outline-danger'>Remove</button>

        </td>
    </tr>
    ";
}
