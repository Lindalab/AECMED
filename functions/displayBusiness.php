<?php
require_once dirname(__FILE__)."/../controllers/business_controller.php";

function showAllBusiness_fnc($department)
{
    $data = business_data_ctr($department);
   foreach($data as $business) {

            $business_id = $business['business_id'];
            $businessName = $business['business_name'];
            $number_of_employees = $business['number_of_employees'];
            $revenue_amount = $business['total_revenue'];
            $year_started = $business['year_started'];
            $sector = $business['sector'];
           
            showSingleBusiness($business_id,$businessName,$number_of_employees,$revenue_amount,$year_started,$sector);
        }
   
}

function showSingleBusiness($business_id,$businessName,$number_of_employees,$revenue_amount,$year_started,$sector)
{

    echo "
  
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
                        $sector
                        </td>
                        <td>
                            <a href='AVI business-view.php?businessid=$business_id' >
                                <img src='./../../assets/read-more.svg' alt='View icon'>
                            </a>
                        </td>
                    </tr>
              
    ";
}
