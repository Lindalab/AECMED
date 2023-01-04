<?php 
    require_once dirname(__FILE__)."/../../controllers/event_controller.php";

    
    $event_name=$_POST['event_name'];
    $date=$_POST['date_organized'];
    $target_group=$_POST['target_group'];
    $desc=$_POST['event_description'];
    $males=$_POST['male_attendance'];
    $females=$_POST['female_attendace'];
    $event_type=$_POST['event_type'];
    $department_id=$_POST['department'];

    $insert = create_event_ctr($event_name, $date, $target_group, $desc, $males, $females, $event_type, $department_id);

    if($insert){
        header("location: ../view/index.php?message=1");
    }else{
        header("location:../view/index.php?message=2");
    }


?>