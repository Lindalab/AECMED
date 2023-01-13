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
        if ($department_id === AVI) {
            header("location: ../../admin/AVI/events.php?message=1");
        } elseif ($department_id === TAC) {
            header("location: ../../admin/TAC/events.php?message=1");
        } elseif ($department_id === D_Lab) {
            header("location: ../../admin/D-Lab/events.php?message=1");
        }
    }else{
        if ($department_id === AVI) {
            header("location: ../../admin/AVI/events.php?message=2");
        } elseif ($department_id === TAC) {
            header("location: ../../admin/TAC/events.php?message=2");
        } elseif ($department_id === D_Lab) {
            header("location: ../../admin/D-Lab/events.php?message=2");
        }
    }


?>