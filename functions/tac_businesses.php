<?php
require_once dirname(__FILE__) . "/../controllers/business_controller.php";
require_once dirname(__FILE__) . "/../controllers/grant_controller.php";


function business_revenue_in_last_four_years(){
    $year = date("Y");
    $previousyear = $year - 4;
    $revenueList = business_revenue_last_four_years_ctr(TAC, $previousyear);
    $dataPoints = array();
    foreach ($revenueList as $revenue) {
        array_push($dataPoints, array("y" => $revenue['revenue'], "label" => $revenue['year']));
    }
    return json_encode($dataPoints, JSON_NUMERIC_CHECK);
}


function student_business()
{
    $businesses = select_business_for_dpt_ctr(TAC);
    $business_id = "";
    $business_name = "";
    $employment_created = "";
    $business_Revenue = "";
    $sector = "";
    $grant_received = "";
    $date_started = "";
    $total_grant = 0;

    foreach ($businesses as $business) {
        $business_id = $business['business_id'];
        $business_name = $business['busines_name'];
        $employment_created = business_employment_created_ctr($business_id)['number'];
        $business_Revenue = total_one_business_revenue_ctr($business_id)['amount'];
        $sector = $business['sector'];
        $grant_received = total_grant_for_a_business_ctr($business_id)['amount'];
        $date_started = $business['year_started'];
        $total_grant += $grant_received;

        student_business_row($business_id, $business_name, $employment_created, $business_Revenue, $sector, $grant_received, $date_started);
    }

    return $total_grant;
}

function student_business_row($business_id, $business_name, $employment_created, $business_Revenue, $sector, $grant_received, $date_started)
{
    echo "
        <tr>
        <td>
            $business_name
        </td>
        <td>
            $employment_created
        </td>
        <td>
            $$business_Revenue
        </td>
        <td>
            $sector
        </td>
        <td>
            $$grant_received
        </td>
        <td>
            $date_started
        </td>
        <td>
            <a href='TAC Business-view.php?business_id=$business_id'>
                <img src='./../../assets/read-more.svg' alt='View icon'>
            </a>
        </td>
    </tr>
        ";
}


function business_owners_gender($department){
    $males = number_of_businesses_by_gender_ctr($department, MALE);
    $females = number_of_businesses_by_gender_ctr($department, FEMALE);

    $dataPoints = array();

    array_push($dataPoints,array("y"=>$males, "label"=>"males"), array("y"=>$females, "label"=>"females"));

    return json_encode($dataPoints, JSON_NUMERIC_CHECK);    
}


