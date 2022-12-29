<?php
require_once dirname(__FILE__) . "/../controllers/grant_controller.php";
require_once dirname(__FILE__) . "/../controllers/general_controller.php";

function show_grants()
{
    $grantList = select_grant_for_dpt_ctr(TAC);
    foreach ($grantList as $grant) {
        $grant_id = $grant['grant_id'];
        $type = grant_type($grant['grant_type']);
        // $beneficiaries = count_grant_beneficiaries($grant_id);
        display_grants($grant['grant_id'], $grant['grant_name'], "not yet", $grant['amount'], $grant['date_received'], $type);
    }
}


function display_grants($id, $grant_name, $beneficiaries, $amount, $date, $type)
{
    echo "
        <tr>
        <td>
            $grant_name
        </td>
        <td>
            $beneficiaries
        </td>
        <td>
            $$amount
        </td>
        <td>
            $date
        </td>
        <td>
            $type
        </td>
        <td>
            <a href='TAC grant-view.php?grant_id=$id'>
                <img src='./../../assets/read-more.svg' alt='View icon'>
            </a>
        </td>
    </tr>
        ";
}

function count_grant_beneficiaries($grant_id)
{
    $count_projects = count_grant_for_project_ctr($grant_id);
    $count_business = count_business_received_grant_ctr($grant_id);

    return $count_projects;
}

function graphing_data_for_years_and_business()
{
    $year = date("Y");
    $year = $year - 4;
    $data = grant_department_over_years_ctr(TAC, $year);
    $dataPoints = array();
    foreach ($data as $grant) {
        array_push($dataPoints, array("y" => $grant['amount'], "label" => $grant['year']));
    }
    return json_encode($dataPoints, JSON_NUMERIC_CHECK);
}

function graphing_data_busines_type(){
   $data = grant_type_for_department_ctr(TAC);
   $dataPoints = array();
    foreach ($data as $grant) {
        array_push($dataPoints, array("y" => $grant['amount'], "label" => grant_type($grant['grant_type'])));
    }
    return json_encode($dataPoints, JSON_NUMERIC_CHECK);
}





// print_r(graphing_data_for_years_and_business());
