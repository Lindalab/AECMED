<?php 
    require_once dirname(__FILE__)."/../../controllers/grant_controller.php";
    $grant_id=$_GET['grant_id'];
    $delete = delete_grant_ctr($grant_id);

    if($delete){
       echo 1;
    }else{
        echo 2;
    }



?>