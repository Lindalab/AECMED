<?php
require_once dirname(__FILE__) . "/../controllers/stakeholder_controller.php";

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
