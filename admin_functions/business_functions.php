<?php
require_once dirname(__FILE__) . "/../controllers/business_controller.php";
require_once dirname(__FILE__) . "/../controllers/grant_controller.php";

function display_business_grants($business_id){
    $grant_list = grant_for_a_business_ctr($business_id);
    foreach($grant_list as $grant){
        business_grants($grant['busines_name'],$business_id,$grant['grant_id'], $grant['grant_name'], $grant['amount_received'],$grant['date']);
    }
}

function list_business_onwers($business_id){
    $stakeholder = stakeholder_business($business_id);
    foreach($stakeholder as $owner){
        show_business_owner($owner['stakeholder_image'], $owner['first_name']." ".$owner['last_name'], $owner['stakeholder_email'], $owner['phone_number'], $business_id, $owner['stakeholder_id']);
    }
}



function show_business_owner($image, $name, $email,$phone, $business_id, $stakeholder_id){
    echo "
    <figure class='img-frame'>
    <img class='img-view' src='../$image'
        alt='img name' width='20%' height='50%'>
    <figcaption>
        $name <br>
        <sub class='text-muted'>
         $email
        </sub><br>
        <sub class='text-muted'>
         $phone
        </sub><br>
        <sub>
        <button class='btn btn-outline-warning'>
        <i class='bi bi-pencil-square'></i>
        </button>
        <button class='btn btn-outline-danger' onclick=delete_action('../../actions/deletions/delete_business_stakeholder.php?business_id=$business_id&stakeholder_id=$stakeholder_id')>
        <i class='bi bi-trash3-fill'></i>
        </button>
        </sub>
    </figcaption>
</figure>
    ";
}


function business_grants($business_name,$business_id, $grant_id, $name, $amount,$date){
   $grant_name = str_replace(' ', "_", trim($name));
    echo "<tr>
    <td>$name</td>
    <td>$$amount</td>
    <td>$date</td>
    <td>
        <button class='btn btn-outline-warning' onclick=edit('$grant_name','$amount','$date','$grant_id')>Edit</button>
        <button class='btn btn-outline-danger' onclick=delete_action('../../actions/deletions/delete_business_grant.php?business_id=$business_id&grant_id=$grant_id&date=$date')>Remove</button>
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
        <button class='btn btn-outline-warning' onclick=edit_business_revenue('$year','$revenue')>Edit</button>
        <button class='btn btn-outline-danger' onclick=delete_action('../../actions/deletions/delete_business_revenue.php?business_id=$business_id&year=$year&amount=$revenue')>Remove</button>
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
            <a href='../../forms/edit/edit-business.php?business_id=$id'>
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


function modal_business_stakeholder($department, $business_id){
    echo "<div class='modal fade bd-example-modal-lg' tabindex='-1' role='dialog' aria-labelledby='myLargeModalLabel' aria-hidden='true'>
    <div class='modal-dialog modal-lg'>
        <div class='modal-content'>
            <div class='modal-header'>
                <h3 class='modal-title' id='exampleModalLabel'>Add A Business Owner</h3>
                <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                    <span aria-hidden='true'>&times;</span>
                </button>
            </div>
            <div class='modal-body'>
                <form id='validationform' data-parsley-validate='' novalidate='' action='../../actions/insertions/add_business_owner.php' method='POST' enctype='multipart/form-data'>
                    <div class='form-group row'>
                        <label class='col-12 col-sm-3 col-form-label text-sm-right'>Stakeholder Name</label>
                        <div class='col-sm-4 col-lg-3 mb-3 mb-sm-0'>
                            <input id='name' type='text' required='' placeholder='First Name' name='fname' class='form-control'>
                        </div>
                        <div class='col-sm-4 col-lg-3'>
                            <input type='text' required='' placeholder='Last Name' name='lname' class='form-control'>
                        </div>
                        <input type='hidden' placeholder='' value='<?php echo $department ?>' name='department' class='form-control'>
                        <input type='hidden' placeholder='' value='<?php echo $business_id ?>' name='business_id' class='form-control'>

                    </div>
                    <div class='form-group row'>
                        <label class='col-12 col-sm-3 col-form-label text-sm-right'>Stakeholder role</label>
                        <div class='col-12 col-sm-8 col-lg-6'>
                            <select name='role' id='' class='form-control'>
                                <option value='<?php echo STUDENT ?>'>Student</option>
                                <option value='<?php echo ALUMNI ?>'>Alumni</option>
                                <option value='<?php echo LECTURER ?>'>Lecturer</option>
                            </select>
                        </div>
                    </div>
                    <div class='form-group row'>
                        <label class='col-12 col-sm-3 col-form-label text-sm-right'>Stakeholder gender</label>
                        <div class='col-12 col-sm-8 col-lg-6'>
                            <select name='gender' id='' class='form-control'>
                                <option value='<?php echo  MALE ?>'>Male</option>
                                <option value='<?php echo FEMALE ?>'>Female</option>
                            </select>
                        </div>
                    </div>
                    <div class='form-group row'>
                        <label class='col-12 col-sm-3 col-form-label text-sm-right'>Stakeholder E-Mail</label>
                        <div class='col-12 col-sm-8 col-lg-6'>
                            <input type='email' required='' data-parsley-type='email' name='email' placeholder='Enter a valid e-mail' class='form-control'>
                        </div>
                    </div>
                    <div class='form-group row'>
                        <label class='col-12 col-sm-3 col-form-label text-sm-right'>Stakeholder Contact</label>
                        <div class='col-12 col-sm-8 col-lg-6'>
                            <input data-parsley-type='number' type='number' required='' name='phone_number' placeholder='Enter only numbers' class='form-control'>
                        </div>
                    </div>
                    <div class='form-group row'>
                        <label class='col-12 col-sm-3 col-form-label text-sm-right'>Stakeholder Image</label>
                        <div class='col-12 col-sm-8 col-lg-6'>
                            <input name='stakeholder_image' type='file' accept='image/*'>
                        </div>
                    </div>
                    <div class='modal-footer'>
                        <div class='form-group center'>
                            <div class='col col-sm-10 col-lg-9 offset-sm-1 offset-lg-0'>
                                <!-- <button type='button' class='btn btn-danger' data-dismiss='modal'>Close</button> -->
                                <button type='submit' class='btn btn-space btn-primary'>Submit</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
";
}