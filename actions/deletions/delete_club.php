<?php 
    require_once dirname(__FILE__)."/../../controllers/clubs_controller.php";

    $id = $_GET['club_id'];

    $result = delete_club($id);

    if($result){
        echo 1;
    }else{
        echo 2;
    }
?>