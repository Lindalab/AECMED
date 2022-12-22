<?php 
    require_once("../settings/db_class.php");

    class Project extends db_connection{

        function create_project($project_name, $desc, $status, $date_Started, $sdg_goals, $department_id, $sector){

            $sql = "";

            return $this->db_query($sql);

        }

        function update_project($project_id, $project_name, $desc, $status, $date_Started, $sdg_goals, $department_id, $sector){
            $sql = "";

            return $this->db_query($sql);
        }

        function delete_project($project_id){
            $sql = "";

            return $this->db_query($sql);
        }

        function select_all_project(){
            $sql = "";

            return $this->db_fetch_all($sql);
        }

        function select_one_project($project_id){
            $sql = "";
            return $this->db_fetch_one($sql);
        }

        function select_project_under_dpt($department_id){
            $sql = "";
            return $this->db_fetch_all($sql);
        }

        function select_project_under_dpt_in_year($department, $year){
            $sql = "";

            return $this->db_fetch_all($sql);
        }

        function select_project_status($status){
            $sql = "";

            return $this->db_fetch_all($sql);
        }

        function select_project_stakeholders($project_id){
            $sql = "";
            return $this->db_fetch_all($sql);
        }

    }



?>