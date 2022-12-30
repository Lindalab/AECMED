<?php 
    // require_once dirname(__FILE__)."/../";

    require_once dirname(__FILE__)."/../controllers/project_controller.php";

    $project_id = $_GET['project_id'];
    $project = select_one_project_ctr($project_id);
    $project_name = $project['project_name'];
    $date = $project['date_started'];
    $description = $project['project_description'];
    $project_stakeholders = select_project_stakeholders_ctr($project_id);

    function stakeholder_list($project_stakeholders){
        foreach ($project_stakeholders as $value) {
            stakeholder($value['first_name']." ".$value['last_name'], $value['email']);
        }
    }

    function stakeholder($name, $email){
        echo "
        <figure class='img-frame'>
        <img class='img-view' src='../../assets/dummy.png' alt='img name'>
        <figcaption>
            $name <br>
            <sub class='text-muted'>$email</sub>
        </figcaption>
    </figure>
        ";
    }

?>