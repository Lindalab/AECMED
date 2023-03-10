<?php 
    require_once dirname(__FILE__)."/../controllers/project_controller.php";
    require_once dirname(__FILE__)."/../controllers/grant_controller.php";
    require_once dirname(__FILE__)."/../controllers/general_controller.php";

    function list_student_project_row($department){
        // $department = 3;
        $projectList = select_project_under_dpt_ctr($department);
        $project_name = "";
        $grant_received = "";
        $date = "";
        $status = "";
        foreach($projectList as $project){
            $project_id = $project['project_id'];
            $project_name = $project['project_name'];
            $date = $project['date_started'];
            $status = project_status($project['project_status']);
            $grant_received = sum_grant_for_project_ctr($project_id)['amount'];
            student_projects_row($project_id,$project_name, $grant_received, $date, $status);
        }
    }

    
    function student_projects_row($project_id, $project_name, $grant_received, $date, $status){
        echo "
        <tr>
        <td>
        $project_name
    </td>
    <td>
    $date
    </td>
    <td>
    $$grant_received
      
    </td>
    <td>
        $status
    </td>
    <td>
    <a href='student projects view.php?project_id=$project_id'>
        <button class='btn btn-outline-info'>View</button>
    </a>
    <a href='../../forms/edit/edit-project.php?project_id=$project_id'>
        <button class='btn btn-outline-warning'>Edit</button>
    </a>
    <button class='btn btn-outline-danger' onclick=delete_action('../../actions/deletions/delete_project.php?project_id=$project_id')>Remove</button>
                                                       
    </td>
        </tr>";
        
    }

    function show_project_stakeholders($project_id){
        $list = select_project_stakeholders_ctr($project_id);
        foreach($list as $project){
            project_stakeholders_row($project['stakeholder_image'], $project['first_name']." ".$project['last_name'], $project['email'], $project['phone_number']);
        }
    }

    function project_stakeholders_row($image, $name, $email, $phone){
        echo "
        <figure class='img-frame'>
        <img class='img-view' src='../$image'
            alt='img name' width='10%' height='40%'>
        <figcaption>
            $name <br>
            <sub class='text-muted'>
                $email
            </sub><br>
            <sub class='text-muted'>
                $phone
            </sub>
        </figcaption>
    </figure>
        ";
    }


    function display_project_grant($project_id){
        $projectList = grant_for_project_ctr($project_id);
        $name = "";
        $grant_received = "";
        $date = "";
        $grant_id = "";
        foreach($projectList as $grant){
            $name = $grant['grant_name'];
            $grant_received = $grant['amount'];
            $date = $grant['date'];
            $grant_id = $grant['grant_id'];
            project_grant_row($grant_id, $project_id, $name, $grant_received, $date);
        }
    }

    function project_grant_row($grant_id,$project_id, $name, $grant_received, $date){
        $g_name = str_replace(" ", "_", trim($name));
        $grant_received = trim($grant_received);
        echo "
        <tr>
            <td>$name</td>
            <td>$$grant_received</td>
            <td>$date</td>
            <td>
                <button class='btn btn-outline-warning' onclick=edit('$g_name','$grant_received','$date','$grant_id')>Edit</button>
                <button class='btn btn-outline-danger' onclick=delete_action('../../actions/deletions/delete_project_grant.php?grant_id=$grant_id&project_id=$project_id&date=$date&amount=$grant_received')>Remove</button>
            </td>
        </tr>";
    }
?>