<?php
require_once dirname(__FILE__) . "/../controllers/business_controller.php";
require_once dirname(__FILE__) . "/../controllers/grant_controller.php";

function display_business_grants($business_id){
    $grant_list = grant_for_a_business_ctr($business_id);
    foreach($grant_list as $grant){
        business_grants($grant['grant_id'], $grant['grant_name'], $grant['amount_received'],"not covered");
    }
}

function list_business_onwers($business_id){
    $stakeholder = stakeholder_business($business_id);
    foreach($stakeholder as $owner){
        show_business_owner($owner['stakeholder_image'], $owner['first_name']." ".$owner['last_name'], $owner['stakeholder_email'], $owner['phone_number']);
    }
}



function show_business_owner($image, $name, $email,$phone){
    echo "
    <figure class='img-frame'>
    <img class='img-view' src='../$image'
        alt='img name'>
    <figcaption>
        $name <br>
        <sub class='text-muted'>
         $email
        </sub><br><br>
        <sub class='text-muted'>
         $phone
        </sub>
    </figcaption>
</figure>
    ";
}


function business_grants($grant_id, $name, $amount,$date){
    echo "<tr>
    <td>$name</td>
    <td>$$amount</td>
    <td>$date</td>
    <td>
        <button class='btn btn-outline-warning'>Edit</button>
        <button class='btn btn-outline-danger'>Remove</button>
    </td>
</tr>";
}

function display_business_revenue($business_id){
    $revenue_list = select_one_business_revenue($business_id);
    foreach($revenue_list as $revenue){
        show_business_revenue_row($business_id, $revenue['revenue_amount'], $revenue['revenue_year']);
    }
}

function show_business_revenue_row($business_id,$revenue, $year){
    echo "<tr>
    <td>$year</td>
    <td>$$revenue</td>
    <td>
        <button class='btn btn-outline-warning'>Edit</button>
        <button class='btn btn-outline-danger' onclick=delete_action('../../actions/deletions/delete_business_revenue.php?business_id=$business_id&year=$year')>Remove</button>
    </td>
</tr>";
}



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
            <button class='btn btn-outline-danger' onclick=delete_action('../../actions/deletions/delete_business.php?business_id=$id')>Remove</button>
        </td>
    </tr>
        ";
}

function graph_business_revenue_years(){
    $list = total_business_revenue_years_ctr();
    $dataPoints = array();

    foreach ($list as $value) {
        array_push($dataPoints, array("y"=>$value['amount'], "label"=>$value['revenue_year']));
    }

    return json_encode($dataPoints, JSON_NUMERIC_CHECK);
}
