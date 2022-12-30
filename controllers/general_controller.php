<?php
//connect to the user account class
// include("../classes/general_class.php");

function grant_type($type){
    if($type === INTERNAL){
        return "internal";
    }else{
        return "external";
    }
}

function project_status($status){
    if($status == 1){
        return "active";
    }else{
        return "inactive";
    }
}
?>