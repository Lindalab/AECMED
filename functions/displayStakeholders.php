<?php
require_once dirname(__FILE__) . "/../controllers/stakeholder_controller.php";

function showAllAviFellows_fnc()
{
    $data = get_avi_fellows_ctr();
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
           
        </td>
        <td>
            
        </td>
        <td>
            2019-11-15
        </td>
        <td>
            <a href='AVI module-view.php?'>
            <img src='./../../assets/read-more.svg' alt='View icon'>
            </a>
        </td>
    </tr>
    ";
}
