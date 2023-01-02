<?php   
    require_once dirname(__FILE__)."/../controllers/general_controller.php";
    require_once dirname(__FILE__)."/../controllers/grant_controller.php";


    function displa_all_grant_types($department, $type){
        $list = list_grant_type_and_department_ctr($department, $type);

        foreach($list as $grant){
            grants_all_row($grant['grant_id'], $grant['grant_name'],$grant['amount'], $grant['date_received']);       
        }

    }

    function grants_all_row($grant_id, $name, $amount,$date){
        echo "
        <tr>
        <td>$name </td>
        <td>$$amount </td>
        <td>$date</td>
        <td>
            <a href='grants internal view.php?grant_id=$grant_id'>
                <button class='btn btn-outline-info'>View</button>
            </a>
            <a href='../../forms/edit/edit-grant.php'>
                <button class='btn btn-outline-warning'>Edit</button>
            </a>
            <button class='btn btn-outline-danger'>Remove</button>
        </td>
    </tr>
        ";
    }

    function display_grants($department){
        $list = select_grant_for_dpt_ordered_by_amount_ctr($department);
        $count = 0;
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