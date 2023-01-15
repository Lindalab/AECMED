<?php
require_once dirname(__FILE__) . "/../controllers/general_controller.php";
require_once dirname(__FILE__) . "/../controllers/grant_controller.php";


function graphing_data_for_years_and_business($department)
{
    $year = date("Y");
    $year = $year - 10;
    $data = grant_department_over_years_ctr($department, $year);
    $dataPoints = array();
    foreach ($data as $grant) {
        array_push($dataPoints, array("y" => $grant['amount'], "label" => $grant['year']));
    }
    return json_encode($dataPoints, JSON_NUMERIC_CHECK);
}
 

function displa_all_grant_types($department, $type)
{
    $list = list_grant_type_and_department_ctr($department, $type);

    foreach ($list as $grant) {
        if ($type == INTERNAL) {
            grants_internal_row($grant['grant_id'], $grant['grant_name'], $grant['amount'], $grant['date_received']);
        } else {
            grants_external_row($grant['grant_id'], $grant['grant_name'], $grant['amount'], $grant['date_received']);
        }
    }
}



function grants_internal_row($grant_id, $name, $amount, $date)
{
    echo "
        <tr>
        <td>$name </td>
        <td>$$amount </td>
        <td>$date</td>
        <td>
            <a href='grants internal view.php?grant_id=$grant_id'>
                <button class='btn btn-outline-info'>View</button>
            </a>
            <a href='../../forms/edit/edit-grant.php?grant_id=$grant_id'>
                <button class='btn btn-outline-warning'>Edit</button>
            </a>
            <button class='btn btn-outline-danger' onclick=delete_action('../../actions/deletions/delete_grant.php?grant_id=$grant_id')>Remove</button>
        </td>
    </tr>
        ";
}

function grants_external_row($grant_id, $name, $amount, $date)
{
    echo "
        <tr>
        <td>$name </td>
        <td>$$amount </td>
        <td>$date</td>
        <td>
            <a href='grants external view.php?grant_id=$grant_id'>
                <button class='btn btn-outline-info'>View</button>
            </a>
            <a href='../../forms/edit/edit-grant.php?grant_id=$grant_id'>
                <button class='btn btn-outline-warning'>Edit</button>
            </a>
            <button class='btn btn-outline-danger' onclick=delete_action('../../actions/deletions/delete_grant.php?grant_id=$grant_id')>Remove</button>
        </td>
    </tr>
        ";
}

function display_grants($department)
{
    $list = select_grant_for_dpt_ordered_by_amount_ctr($department);
    $count = 0;
    foreach ($list as $grant) {
        if ($count >= 3) {
            return;
        }

        grant_row($grant['grant_name'], $grant['amount'], grant_type($grant['grant_type']), $grant['date_received']);

        $count++;
    }
}

function display_grant_types($department, $type)
{
    $list = list_grant_type_and_department_by_amount_ctr($department, $type);
    $count = 0;
    foreach ($list as $grant) {
        if ($count > 3) {
            return;
        }
        grant_type_row($grant['grant_name'], $grant['amount'], $grant['date_received']);
        $count++;
    }
}


function grant_row($name, $amount, $type, $date)
{
    echo "
        <tr>
        <td>$name </td>
        <td>$$amount</td>
        <td>$type Grant</td>
        <td>$date</td>
    </tr>
        ";
}

function grant_type_row($name, $amount, $date)
{
    echo "
        <tr>
        <td>$name </td>
        <td>$$amount</td>
        <td>$date</td>
    </tr>
        ";
}

function graphing_data_busines_type($department){
    $data = grant_type_for_department_ctr($department);
    $dataPoints = array();
     foreach ($data as $grant) {
         array_push($dataPoints, array("y" => $grant['amount'], "label" => grant_type($grant['grant_type'])));
     }
     return json_encode($dataPoints, JSON_NUMERIC_CHECK);
 }

 function count_grant_type($department){
    $internal = count_grant_type_and_department_ctr($department, INTERNAL);
    $external = count_grant_type_and_department_ctr($department, EXTERNAL);
    $dataPoints = array();

    array_push($dataPoints, array("y"=>$internal, "label"=>"internal grant"), array("y"=>$external, "label"=>"external grant"));

    return json_encode($dataPoints, JSON_NUMERIC_CHECK);
 }


 function grants_per_year(){
    $data = list_sum_grant_per_year_ctr();
    $dataPoint = array();
    foreach($data as $value){
        array_push($dataPoint, array("y"=>$value['amount'], "label"=>$value['year']));
    }

    return json_encode($dataPoint, JSON_NUMERIC_CHECK);
 }

 function display_grant_for_project($department){
    
 }