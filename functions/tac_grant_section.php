<?php 
    
    require_once dirname(__FILE__)."/../controllers/grant_controller.php";
    require_once dirname(__FILE__)."/../controllers/general_controller.php";

    function list_grant_type($department, $type){
        $list = list_grant_type_and_department_ctr($department, $type);
        foreach($list as $grant){
            grant_type_row($grant['grant_id'], $grant['grant_name'], "not yet", $grant['amount'], $grant['date_received']);
        }
    }

    function grant_type_row($grant_id, $grant_name, $beneficiaries, $amount, $date){
        echo "<tr>
        <td>
            $grant_name
        </td>
      
        <td>
            $$amount
        </td>
        <td>
            $date
        </td>
        <td>
            <a href='TAC grant-view.php?grant_id=$grant_id'>
                <img src='./../../assets/read-more.svg' alt='View icon'>
            </a>
        </td>
    </tr>";
    }


    function graph_data_for_business($type, $department_id, $year){
        $result = sum_grant_type_department_over_years_ctr($type, $department_id, $year);
        $dataPoints = array();
        foreach($result as $data){
            array_push($dataPoints, array("y"=>$data['amount'], "label"=>$data['year']));
        }

        return json_encode($dataPoints, JSON_NUMERIC_CHECK);
    }

    function number_of_project_with_type($department, $type){
        $count_projects = number_of_project_grant_type($department, $type)['number'];
        $count_business = number_of_business_grants_ctr($department, $type);
        if($count_business != NULL){
            $count_business = number_of_business_grants_ctr($department, $type)['number'];
        }else{
            $count_business = 0;
        }
        
        $dataPoints = array();
        array_push($dataPoints, array("y"=>$count_projects, "label"=>"Projects"), array("y"=>$count_business, "label"=>"Businesses"));

        return json_encode($dataPoints, JSON_NUMERIC_CHECK);
    }

?>