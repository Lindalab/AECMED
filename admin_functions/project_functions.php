<?php 
    require_once dirname(__FILE__)."/../controllers/project_controller.php";
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
        <img class='img-view' src='../<?php echo $image;?>'
            alt='img name'>
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


    
?>