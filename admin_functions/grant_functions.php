<?php   
    require_once dirname(__FILE__)."/../controllers/general_controller.php";
    require_once dirname(__FILE__)."/../controllers/grant_controller.php";


    function display_grants($department){
        $list = select_grant_for_dpt_ordered_by_amount_ctr($department);
        $count = 1;
        foreach($list as $grant){
            if($count > 3){
                return;
            }

            grant_row($grant['grant_name'],$grant['amount'], grant_type($grant['grant_type']), $grant['date_received']);

            $count++;
        }

    
    }

    function display_grant_types($department, $type){
        $list = list_grant_type_and_department_by_amount_ctr($department, $type);
        $count = 0;
        foreach($list as $grant){
            if($count > 3){
                return;
            }
            grant_type_row($grant['grant_name'],$grant['amount'], $grant['date_received']);
            $count++;
        }
    }


    function grant_row($name, $amount, $type, $date){
        echo "
        <tr>
        <td>$name </td>
        <td>$$amount</td>
        <td>$type Grant</td>
        <td>$date</td>
    </tr>
        ";
    }

    function grant_type_row($name, $amount, $date){
        echo "
        <tr>
        <td>$name </td>
        <td>$$amount</td>
        <td>$date</td>
    </tr>
        ";
    }

?>