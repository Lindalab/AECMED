<?php 

    require_once("../../controllers/grant_controller.php");

    $grant_id = $_POST['grant_id'];
    $grant_name = $_POST['grant_name'];
    $grant_type = $_POST['grant_type'];
    $date_received = $_POST['date_received'];
    $grant_desc = $_POST['grant_description'];
    $department_id = $_POST['department_id'];
    $amount = $_POST['amount'];

    $updated = update_grant_ctr($grant_id, $grant_name, $grant_type, $date_received, $grant_desc,$department_id, $amount);

    if($updated){
        if ($grant_type === INTERNAL){
            if ($department_id === AVI) {
                header("location: ../../admin/AVI/grants internal.php?message=4");
            } elseif ($department_id === TAC) {
                header("location: ../../admin/TAC/grants internal.php?message=4");
            } elseif ($department_id === D_Lab) {
                header("location: ../../admin/D-Lab/grants internal.php?message=4");
            }
        }else{
            if ($department_id === AVI) {
                header("location: ../../admin/AVI/grants external.php?message=4");
            } elseif ($department_id === TAC) {
                header("location: ../../admin/TAC/grants external.php?message=4");
            } elseif ($department_id === D_Lab) {
                header("location: ../../admin/D-Lab/grants external.php?message=4");
            }
        }
    }else{
        if ($grant_type === INTERNAL){
            if ($department_id === AVI) {
                header("location: ../../admin/AVI/grants internal.php?message=2");
            } elseif ($department_id === TAC) {
                header("location: ../../admin/TAC/grants internal.php?message=2");
            } elseif ($department_id === D_Lab) {
                header("location: ../../admin/D-Lab/grants internal.php?message=2");
            }
        }else{
            if ($department_id === AVI) {
                header("location: ../../admin/AVI/grants external.php?message=2");
            } elseif ($department_id === TAC) {
                header("location: ../../admin/TAC/grants external.php?message=2");
            } elseif ($department_id === D_Lab) {
                header("location: ../../admin/D-Lab/grants external.php?message=2");
            }
        }
    }


?>