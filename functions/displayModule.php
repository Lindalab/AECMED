<?php
require_once dirname(__FILE__)."/../controllers/module_controller.php";

function showAllBusiness_fnc()
{
    $data = module_data_ctr();
   foreach($data as $business) {

            $business_id = $business['business_id'];
            $businessName = $business['business_name'];
            $number_of_employees = $business['number_of_employees'];
            $revenue_amount = $business['total_revenue'];
            $year_started = $business['year_started'];
            $business_type = $business['business_type'];
            $business_description = $business['business_description'];
            $business_logo = $business['business_logo'];
            $business_email = $business['business_email'];
            $sector = $business['sector'];
            $business_contact = $business['business_contact'];
            $formalised_structure = $business['formalised_structure'];
            $sdg_alignment = $business['sdg_alignment'];
           
            showSingleBusiness($business_id,$businessName,$number_of_employees,$revenue_amount,$year_started,$business_type,$business_description,$business_logo,$business_email,$sector,$business_contact,$formalised_structure, $sdg_alignment);
        }
   
}

function showSingleBusiness($business_id,$businessName,$number_of_employees,$revenue_amount,$year_started,$business_type,$business_description,$business_logo,$business_email,$sector,$business_contact,$formalised_structure, $sdg_alignment)
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
                            <a href='AVI business-view.php?businessid=$business_id' >
                                <img src='./../../assets/read-more.svg' alt='View icon'>
                            </a>
                        </td>
                    </tr>
                </tbody>
    ";
}
