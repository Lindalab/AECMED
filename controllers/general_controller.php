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
?>