<?php
require_once dirname(__FILE__)."/../controllers/department_controller.php";

function getDepartmentDropdown_fnc()
{
    $data = select_all_department_ctr();
    echo "
    <select class='custom-select' name='department_id' id='department_id' >
    ";
    foreach ($data as $department) {
        $departmentId = $department['department_id'];
        $departmentName = $department['department_name'];
        departRow($departmentId, $departmentName);
    }
    echo "</select>";
}

function departRow($departmentId, $departmentName)
{
    echo "
    <option value='$departmentId'>$departmentName</option>
    
    ";
}
?>