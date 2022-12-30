<?php 
     require_once dirname(__FILE__)."/../classes/club_class.php";


     function create_club_ctr($name, $description, $executives_number, $total_numbers, $males, $females, $department, $date_registered, $lead_name){
        $club = new Club;
        
        return $club->create_club($name, $description, $executives_number, $total_numbers, $males, $females, $department, $date_registered, $lead_name);
     }

     function update_club_ctr($club_id, $name, $description, $executives_number, $total_numbers, $males, $females, $department, $date_registered, $lead_name){
        $club = new Club;
        
        return $club->create_club($club_id, $name, $description, $executives_number, $total_numbers, $males, $females, $department, $date_registered, $lead_name);
     }


     function delete_club($club_id){
        $club = new Club;
        
        return $club->delete_club($club_id);
     }


     function select_all_clubs_ctr(){
        $club = new Club;
        
        return $club->select_all_clubs();
     }

     function select_one_club_ctr($club_id){
        $club = new Club;
        
        return $club->select_one_club($club_id);
     }

     function count_clubs_ctr(){
         $club = new Club;
        
        return $club->count_clubs();
     }
?>