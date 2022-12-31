<?php
require_once dirname(__FILE__) . "/../controllers/module_controller.php";

// print_r(showAllModule_fnc());

function showAllModule_fnc()
{
    $data = module_data_ctr();
    foreach ($data as $module) {

        $module_id = $module['module_id'];
        $moduleName = $module['module_name'];
        $totalStudents = $module['numbers'];
        $moduledes=$module['module_description'];
        

        showSingleModule($module_id,$moduleName,$totalStudents,$moduledes);
    }
}

function showSingleModule($module_id,$moduleName,$totalStudents,$moduledes)
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
            2019-11-15
        </td>
        <td>
            <a href='AVI module-view.php?moduleid=$module_id&moduleName=$moduleName&totalstudent=$totalStudents&des=$moduledes'>
            <img src='./../../assets/read-more.svg' alt='View icon'>
            </a>
        </td>
    </tr>
    ";
}
