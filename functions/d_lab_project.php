<?php 
    require_once dirname(__FILE__)."/../controllers/project_controller.php";
    require_once dirname(__FILE__)."/../controllers/grant_controller.php";

    // print_r(sum_grant_for_project_ctr("4")['amount']);


    function list_project(){
        $projectList = select_project_under_dpt_ctr(D_Lab);
        foreach($projectList as $project){
            $project_id = $project['project_id'];
            $grant_received = sum_grant_for_project_ctr($project_id)['amount'];
            if($grant_received === NULL){
                $grant_received = 0;
            }
            show_d_lab_project($project_id, $project['project_name'], $project['date_started'], $grant_received);
        }
    }

    function show_d_lab_project($project_id, $project_name, $project_date, $grant_received){
        echo "
        <tr>
        <td>
            $project_name
        </td>
       
        <td>
            $project_date
        </td>
        <td>
            $$grant_received
        </td>
        <td>
            <a href='D-Lab Section-view.php?project_id=$project_id'>
                <img src='./../../assets/read-more.svg' alt='View icon'>
            </a>
        </td>
    </tr>
        ";
    }

    // list_project();
?>