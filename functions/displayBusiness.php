<?php
require_once dirname(__FILE__)."/../controllers/business_controller.php";

function showAllBusiness_fnc($department_name)
{
    $data = business_data_ctr($department_name);
   foreach($data as $business) {

            $business_id = $business['business_id'];
            $businessName = $business['product_name'];
            $number_of_employees = $business['number_of_employees'];
            $revenue_amount = $business['revenue_amount'];
            $year_started = $business['year_started'];
            $business_type = $business['business_type'];
           
            showSingleBusiness($business_id,$businessName,$number_of_employees,$revenue_amount,$year_started,$business_type);
        }
   
}

function showSingleBusiness($business_id,$businessName,$number_of_employees,$revenue_amount,$year_started,$business_type)
{

    echo "
    <tbody>
                    <tr>
                        <td>
                        $businessName
                        </td>
                        <td>
                        $number_of_employees
                        </td>
                        <td>
                            $ $revenue_amount
                        </td>
                        <td>
                        $year_started
                        </td>
                        <td>
                        $business_type
                        </td>
                        <td>
                            <a href='AVI business-view.php?business=$business_id'>
                                <img src='./../../assets/read-more.svg' alt='View icon'>
                            </a>
                        </td>
                    </tr>
                </tbody>
    ";
}
