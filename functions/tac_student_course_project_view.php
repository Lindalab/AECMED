<?php 
    require_once dirname(__FILE__)."/../controllers/project_controller.php";
    require_once dirname(__FILE__)."/../controllers/grant_controller.php";

    print_r(project_stakeholder(8));
    
    function project_stakeholder($project_id){
        $list = select_project_stakeholders_ctr($project_id);
        $name = "";
        foreach($list as $stakeholder){
            $name = $stakeholder['first_name']." ".$stakeholder['last_name'];
            project_stakeholder_li($name);
        }
    }

    function project_stakeholder_li($name){
        echo "<li>
        $name
    </li>";
    }

    function show_project_grant($project_id){
        $projectList = grant_for_project_ctr($project_id);
        foreach($projectList as $project){
            project_grant_single($project['grant_name'], $project['project_amount']);
        }
    }

    function project_grant_single($name, $amount){
        echo "$name ($$amount)"."<br>";
    }

   

?>