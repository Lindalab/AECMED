<?php 
    require_once dirname(__FILE__)."/../../controllers/event_controller.php";

    $event_id=$_GET['event_id'];
    $delete = delete_event_ctr($event_id);

    if($delete){
        echo 1;
    }else{
        echo 2;
    }



?>