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


// function getCohortDropdown_fnc()
// {
//     $data = select_all_cohort_ctr();
//     echo "
//     <select class='custom-select' name='cohort_id' id='cohort_id' >
//     ";
//     foreach ($data as $cohort) {
//         $cohortId = $cohort['cohort_id'];
//         $cohortName = $cohort['cohort_name'];
//         cohortRow($cohortId, $cohortName);
//     }
//     echo "</select>";
// }

function cohortRow($cohortId, $cohortName)
{
    echo "
    <option value='$cohortId'>$cohortName</option>
    
    ";
}


function show_department_dropdown($department_id){
    $data = select_all_department_ctr();
    foreach ($data as $department) {
        $departmentId = $department['department_id'];
        $departmentName = $department['department_name'];
        if($departmentId === $department_id)
            department_row($departmentId, $departmentName);
    }   
}

function department_row($id, $name){
    echo "
    <option value='$id'>$name</option>
    ";
}


function grant_type_dropdown($type){
    if($type === INTERNAL ){
        echo "<option value='".INTERNAL."'>Internal Grant</option>";
    }elseif($type === EXTERNAL){
        echo "<option value='".EXTERNAL."'>External Grant</option>";
    }
}

?>