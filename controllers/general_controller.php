<?php
//connect to the user account class
// include("../classes/general_class.php");

function grant_type($type){
    if($type === INTERNAL){
        return "Internal";
    }else{
        return "External";
    }
}

function project_status($status){
    if($status == 1){
        return "active";
    }else{
        return "completed";
    }
}

function get_gender($gender){
    if($gender === 1){
        return "male";
    }else{
        return "female";
    }
}

function checkbox_data($data){
    $sdgs = "";
    foreach($data as $info){
        $sdgs .=$info.",";
    }

    return $sdgs;
}







?>