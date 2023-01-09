<?php
require_once dirname(__FILE__) . "/../controllers/stakeholder_controller.php";
require_once dirname(__FILE__)."/../controllers/general_controller.php";
require_once dirname(__FILE__) . "/../controllers/cohort_controller.php";

function showAllAviFellows_fnc($department)
{
    $data = get_avi_fellows_ctr($department);
    foreach ($data as $module) {

        $stakeholder_id = $module['stakeholder_id'];
        $first_name = $module['first_name'];
        $last_name = $module['last_name'];
        $name= $first_name .' '.$last_name;
        $gender=$module['gender'];
        $email=$module['email'];
        $stakeholder_image=$module['stakeholder_image'];
        $cohort_name=$module['cohort_name'];
        $cohort_year=$module['cohort_year'];
        $business_name=$module['business_name'];
        $business_id=$module['business_id'];
        

        showSingleFellow($stakeholder_id,$name,$gender,$email,$stakeholder_image,$cohort_name,$cohort_year,$business_name,$business_id);
    }
}

function  showSingleFellow($stakeholder_id,$name,$gender,$email,$stakeholder_image,$cohort_name,$cohort_year,$business_name,$business_id)
{

    echo "
    <tr>
        <td>
            $cohort_name
        </td>
        <td>
            $name
        </td>
        <td>
           $business_name
        </td>
        <td>
            $gender
        </td>
        <td>
            <a href='AVI fellow-view.php?Id=$stakeholder_id&email=$email&stakeholderImage=$stakeholder_image&cohortyear=$cohort_year&businessName=$business_name'>
            <img src='./../../assets/read-more.svg' alt='View icon'>
            </a>
        </td>
    </tr>
    ";
}

function fellow_gender_data($department){
    $data = get_fellows_by_gender_ctr($department);
    $dataPoints = array();
    foreach($data as $value){
        array_push($dataPoints, array("y"=>$value['count'], "label"=>get_gender($value['gender'])));
    }

    return json_encode($dataPoints, JSON_NUMERIC_CHECK);
}


function cohort_numbers(){
    $data = cohort_stakeholder_by_year_ctr();
    $dataPoints = array();
    foreach($data as $value){
        array_push($dataPoints, array("y"=>$value['count'], "label"=>$value['cohort_year']));
    }

    return json_encode($dataPoints, JSON_NUMERIC_CHECK);
}
