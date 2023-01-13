<?php
require_once dirname(__FILE__)."/../controllers/department_controller.php";
require_once dirname(__FILE__)."/../controllers/grant_controller.php";

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

function show_department_selected_dropdown($department_id){
    $data = select_all_department_ctr();
    foreach ($data as $department) {
        $departmentId = $department['department_id'];
        $departmentName = $department['department_name'];
        if($departmentId === $department_id){
            department_row_selected($departmentId, $departmentName);
            continue;
        }else{
            department_row($departmentId, $departmentName);
        }
    
 
    }   
}

function department_row($id, $name){
    echo "
    <option value='$id'>$name</option>
    ";
}

function department_row_selected($id, $name){
    echo "
    <option value='$id' selected>$name</option>
    ";
}


function grant_type_dropdown($type){
    if($type === INTERNAL ){
        echo "<option value='".INTERNAL."'>Internal Grant</option>";
    }elseif($type === EXTERNAL){
        echo "<option value='".EXTERNAL."'>External Grant</option>";
    }
}

function grant_type_dropdown_edit($type){
    if($type === INTERNAL ){
        echo "<option value='".INTERNAL."' selected>Internal Grant</option>";
        echo "<option value='".EXTERNAL."'>External Grant</option>";
    }elseif($type === EXTERNAL){
        echo "<option value='".INTERNAL."'>Internal Grant</option>";
        echo "<option value='".EXTERNAL."' selected>External Grant</option>";
    }
}


function project_status_dropdown($status){
    if($status === ACTIVE){
        echo "<option value='".ACTIVE."' selected>Active</option>";
        echo "<option value='".INACTIVE."'>Completed</option>";
    }else{
        echo "<option value='".ACTIVE."'>Active</option>";
        echo "<option value='".INACTIVE."' selected>Completed</option>";

    }
}


function display_checkbox($str, $name){
    echo "<div class='col'>";
    $data = explode(",", $str);
    for ($i=1; $i <= 12; $i++) { 
        if($i === 7 ){
            echo "</div>";
            echo "<div class='col'>";   
        }
        if(in_array($i, $data)){
            selected_checkbox($i, $name." ".$i);
            continue;
        }
        single_checkbox($i, $name." ".$i);
    }
    echo "</div>";
}


function selected_checkbox($value, $name){
    echo "
    <label class='custom-control custom-checkbox'>
    <input id='' name='sdg_goals[]' type='checkbox' data-parsley-multiple='groups' value='$value' data-parsley-mincheck='2' required='' data-parsley-errors-container='#error-container1' class='custom-control-input' checked><span class='custom-control-label'>$name</span>
    </label>
    ";
}

function single_checkbox($value, $name){
    echo "
    <label class='custom-control custom-checkbox'>
    <input id='' name='sdg_goals[]' type='checkbox' data-parsley-multiple='groups' value='$value' data-parsley-mincheck='2' required='' data-parsley-errors-container='#error-container1' class='custom-control-input'><span class='custom-control-label'>$name</span>
    </label>
    ";
}

function gender_dropdown($gender){
    if($gender=== MALE){
        echo "<option value='".MALE."' selected>Male</option>";
        echo "<option value='".FEMALE."'>Female</option>";
    }else if($gender === FEMALE){
            echo "<option value='".MALE."'>Male</option>";
            echo "<option value='".FEMALE."' selected>Female</option>";
    }
}

function role_dropdown($role){
    if($role === LECTURER){
        department_row(STUDENT, "Student");
        department_row(ALUMNI, "Alumni");
        department_row_selected(LECTURER, "lecturer");
    }else if($role === STUDENT){
        department_row_selected(STUDENT, "Student");
        department_row(ALUMNI, "Alumni");
        department_row(LECTURER, "lecturer");
    }else if($role === LECTURER){
        department_row(STUDENT, "Student");
        department_row_selected(ALUMNI, "Alumni");
        department_row(LECTURER, "lecturer");
    }else{
        department_row(STUDENT, "Student");
        department_row(ALUMNI, "Alumni");
        department_row(LECTURER, "lecturer");
    }
}


function course_status_dropdown($status){
    if($status === ACTIVE){
        department_row_selected(ACTIVE, "Active");
        department_row(INACTIVE, "Inactive");
    }elseif($status == INACTIVE){
        department_row(ACTIVE, "Active");
        department_row_selected(INACTIVE, "Inactive");
    }else{
        department_row(ACTIVE, "Active");
        department_row(INACTIVE, "Inactive");
    }
}

function department_grant_dropdown($department){
    $grantList = select_grant_for_dpt_ctr($department);
    $grant_id = "";
    $grant_name = "";
    foreach($grantList as $grant){
        $grant_id = $grant['grant_id'];
        $grant_name = $grant['grant_name'];    
        options($grant_id, $grant_name);
    }
}


function options($id, $name){
    echo "<option value='$id' selected>$name</option>";
}
?>