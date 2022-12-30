<?php 
    require_once dirname(__FILE__)."/../controllers/clubs_controller.php";

    $clubs = select_all_clubs_ctr();
    
    function display_clubs(){
        $club_list = select_all_clubs_ctr();
        foreach($club_list as $club){
            club_row($club['club_id'], $club['name'], $club['number_of_members'], $club['date_registered']);
        }
    }

    function club_row($club_id, $name, $members, $date){
        echo " 
        <tr>
        <td>
            $name
        </td>
        <td>
            $members
        </td>
        <td>
            $date
        </td>
        <td>
            <a href='TAC clubs-view.php?club_id=$club_id'>
                <img src='./../../assets/read-more.svg' alt='View icon'>
            </a>
        </td>
    </tr>
        ";
    }




?>