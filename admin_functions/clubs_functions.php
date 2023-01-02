<?php 
     require_once dirname(__FILE__)."/../controllers/clubs_controller.php";

  
     
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
         <a href='clubs view.php?club_id=$club_id'>
         <button class='btn btn-outline-info'>View</button>
     </a>
     <a href='../../forms/edit/edit-club.php'>
         <button class='btn btn-outline-warning'>Edit</button>
     </a>
     <button class='btn btn-outline-danger'>Remove</button>
         </td>
     </tr>
         ";
     }
 
 
 
?>