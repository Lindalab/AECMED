<?php 
    require_once("../controllers/event_controller.php");
    $event_id=$_POST['event_id'];
    $delete = delete_event_ctr($event_id);

    if($delete){
        header("location: ../view/index.php?message=1");
    }else{
        header("location:../view/index.php?message=2");
    }



?>