<?php 
    require_once dirname(__FILE__)."/../../controllers/clubs_controller.php";

    $name = $_POST['club_name'];
    $desc =  $_POST['desc'];
    $execs = $_POST['execs'];
  
    $males = $_POST['males'];
    $females = $_POST['females'];
    $department = $_POST['department'];
    $date = $_POST['date'];
    $lead_name = $_POST['lead_name'];

    $members = $males+$females+$execs;
    
    $result = create_club_ctr($name,$desc, $execs, $members, $males, $females, $department, $date, $lead_name);

    if($result){
        header("location: ../../admin/TAC/clubs.php?message=1");


        // print_r($_POST['']);
    }else{
        echo "error";
    }

?>