<?php
require_once dirname(__FILE__) . "/../controllers/business_controller.php";

function show_business($department)
{
    $businesses = select_business_for_dpt_ctr($department);
    $business_id = "";
    $business_name = "";
    $employment_created = "";
    $business_Revenue = "";
    $sector = "";
    // $grant_received = "";
    $date_started = "";
    // $total_grant = 0;

    foreach ($businesses as $business) {
        $business_id = $business['business_id'];
        $business_name = $business['busines_name'];
        $employment_created = business_employment_created_ctr($business_id);
        $business_Revenue = total_one_business_revenue_ctr($business_id);

        if($employment_created == NULL){
            $employment_created = 0;
        }else{
            $employment_created = $employment_created['number'];
        }

        if($business_Revenue == NULL){
            $business_Revenue = 0;
        }else{
            $business_Revenue = $business_Revenue['amount'];
        }

        $sector = $business['sector'];
        // $grant_received = total_grant_for_a_business_ctr($business_id)['amount'];
        $date_started = $business['year_started'];

        show_business_row($business_id, $business_name, $employment_created, $business_Revenue, $sector, $date_started);
    }


}



function show_business_row($id, $name, $employment, $revenue, $sector, $date)
{
    echo "
        <tr>
        <td>$name</td>
        <td>$employment</td>
        <td>$$revenue</td>
        <td>$sector</td>
        <td>$date</td>
        <td>
            <a href='business view.php?business_id=$id'>
                <button class='btn btn-outline-info'>View</button>
            </a>
            <a href='../../forms/edit/edit-business.php'>
                <button class='btn btn-outline-warning'>Edit</button>
            </a>
            <button class='btn btn-outline-danger'>Remove</button>
        </td>
    </tr>
        ";
}
