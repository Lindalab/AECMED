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
            $beneficiaries
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


?>