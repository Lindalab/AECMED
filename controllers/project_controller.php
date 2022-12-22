<?php 

    require_once("../classes/project_class.php");

    function create_project_ctr($project_name, $desc, $status, $date_Started, $sdg_goals, $department_id, $sector){
        $project = new Project;

        return $project->create_project($project_name, $desc, $status, $date_Started, $sdg_goals, $department_id, $sector);
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

    function select_one_project_ctr($project_id){
        $project = new Project;

        return $project->select_one_project($project_id);
    }

    function select_project_under_dpt_ctr($department_id){
        $project = new Project;

        return $project->select_project_under_dpt($department_id);
    }

    function select_project_under_dpt_in_year_ctr($department, $year){
        $project = new Project;

        return $project->select_project_under_dpt_in_year($department, $year);
    }

    function select_project_status_ctr($status){
        $project = new Project;

        return $project->select_project_status($status);
    }

    function select_project_stakeholders_ctr($project_id){
        $project = new Project;

        return $project->select_project_stakeholders($project_id);
    }

?>