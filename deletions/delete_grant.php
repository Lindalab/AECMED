<?php 
    require_once("../controllers/grant_controller.php");
    $grant_id=$_POST['grant_id'];
    $delete = delete_grant_ctr($grant_id);

    if($delete){
        header("location: ../view/index.php?message=1");
    }else{
        header("location:../view/index.php?message=2");
    }



?>