<?php 
    require_once dirname(__FILE__)."/../../controllers/project_controller.php";
    require_once dirname(__FILE__)."/../../controllers/grant_controller.php";

    $project_id = $_POST['project_id'];
    $grant_id = $_POST['grant_id'];
    $department = $_POST['department'];
    $amount = $_POST['amount'];

    $inserted = add_project_grant_ctr($grant_id, $project_id, $amount);

    if ($inserted) {
        if($department === TAC){
            header("location: ../../admin/TAC/student projects view.php?project_id=$project_id&message=5");
        }elseif($department === AVI){
            header("location: ../../admin/AVI/projects fellows view.php?project_id=$project_id&message=5");
        }
    }else{
        if($department === TAC){
            header("location: ../../admin/TAC/student projects view.php?project_id=$project_id&message=2");
        }elseif($department === AVI){
            header("location: ../../admin/AVI/projects fellows view.php?project_id=$project_id&message=2");
        }
    }

?>