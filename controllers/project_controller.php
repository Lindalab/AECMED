<?php 
    require_once dirname(__FILE__)."/../classes/project_class.php";
    //require_once("../classes/project_class.php");

    function create_project_ctr($project_name, $desc, $status, $date_Started, $sdg_goals, $department_id, $sector,$project_image){
        $project = new Project;

        return $project->create_project($project_name, $desc, $status, $date_Started, $sdg_goals, $department_id, $sector,$project_image);
    }

    function update_project_ctr($project_id, $project_name, $desc, $status, $date_Started, $sdg_goals, $department_id, $sector){
        $project = new Project;

        return $project->update_project($project_id, $project_name, $desc, $status, $date_Started, $sdg_goals, $department_id, $sector);
    }

    function delete_project_ctr($project_id){
        $project = new Project;

        return $project->delete_project($project_id);
    }

    function select_all_project_ctr(){
        $project = new Project;

        return $project->select_all_project();
    }

    function count_all_project_ctr(){
        $project = new Project;

        return $project->count_all_project();
    }

    function select_one_project_ctr($project_id){
        $project = new Project;

        return $project->select_one_project($project_id);
    }

    function select_project_under_dpt_ctr($department_id){
        $project = new Project;

        return $project->select_project_under_dpt($department_id);
    }

    function count_project_under_dpt($department_id){
        $project = new Project;

        return $project->count_project_under_dpt($department_id);
    }

    function select_project_under_dpt_in_year_ctr($department, $year){
        $project = new Project;

        return $project->select_project_under_dpt_in_year($department, $year);
    }

    function select_project_status_ctr($status){
        $project = new Project;

        return $project->select_project_status($status);
    }

    function count_project_status_ctr($department, $status){
        $project = new Project;

        return $project->count_project_status($department, $status);
    }

    function select_project_stakeholders_ctr($project_id){
        $project = new Project;

        return $project->select_project_stakeholders($project_id);
    }

    function count_project_stakeholders_ctr($project_id){
        $project = new Project;

        return $project->count_project_stakeholders($project_id);
    }

    function insert_stakeholder_project($stakeholder_id, $project_id){
        $project = new Project;

        return $project->insert_stakeholder_project($stakeholder_id, $project_id);
    }

    function delete_stakeholder_project($stakeholder_id, $project_id){
        $project = new Project;

        return $project->delete_stakeholder_project($stakeholder_id, $project_id);
    }

    function update_stakeholder_project($stakeholder_id, $project_id){
        $project = new Project;

        return $project->update_stakeholder_project($stakeholder_id, $project_id);
    }

    function select_all_stakeholder_project(){
        $project = new Project;

        return $project->select_all_stakeholder_project();
    }

    function select_one_stakeholder_project($stakeholder_id, $project_id){
        $project = new Project;

        return $project->select_one_stakeholder_project($stakeholder_id, $project_id);
    }

    function count_projects_in_year_ctr($department_id){
        $project = new Project;
        return $project->count_projects_in_year($department_id);
    }

    
?>