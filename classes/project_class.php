<?php 
    require_once dirname(__FILE__)."/../settings/db_class.php";
    // require_once("../settings/db_class.php");

    class Project extends db_connection{

        function create_project($project_name, $desc, $status, $date_Started, $sdg_goals, $department_id, $sector,$project_image){

            $sql = "INSERT INTO `project`(`project_name`, `project_description`, `project_status`, `date_started`, `sdg_goals`, `department_id`, `sector`,`project_image`) VALUES ('$project_name','$desc','$status','$date_Started','$sdg_goals','$department_id','$sector','$project_image')";

            return $this->db_query($sql);

        }

        function update_project($project_id, $project_name, $desc, $status, $date_Started, $sdg_goals, $department_id, $sector){
            $sql = "UPDATE `project` SET `project_name`='$project_name',`project_description`='$desc',`project_status`='$status',`date_started`='$date_Started',`sdg_goals`='$sdg_goals',`department_id`='$department_id',`sector`='$sector' WHERE `project_id`='$project_id'";

            return $this->db_query($sql);
        }

        function delete_project($project_id){
            $sql = "DELETE FROM `project` WHERE `project_id`='$project_id' ";

            return $this->db_query($sql);
        }

        function select_all_project(){
            $sql = "SELECT * FROM `project`";

            return $this->db_fetch_all($sql);
        }

        function count_all_project(){
            $sql = "SELECT * FROM `project`";

            $this->db_fetch_all($sql);

            return $this->db_count();
        }

        function select_one_project($project_id){
            $sql = "SELECT * FROM `project` WHERE `project_id`='$project_id'";
            return $this->db_fetch_one($sql);
        }

        function select_project_under_dpt($department_id){
            $sql = "SELECT * FROM `project` WHERE `department_id`='$department_id'";
            return $this->db_fetch_all($sql);
        }

        function count_project_under_dpt($department_id){
            $sql = "SELECT COUNT(department_id) as number FROM `project` WHERE `department_id`='$department_id'";
            return $this->db_fetch_one($sql);
        }

        // function count_project_under_depat

        function select_project_under_dpt_in_year($department, $year){
            $sql = "SELECT * FROM `project` WHERE `department_id`='$department' and EXTRACT(YEAR FROM date_started)= '$year' ";

            return $this->db_fetch_all($sql);
        }

        function count_project_under_dpt_in_year($department, $year){
            $sql = "SELECT * FROM `project` WHERE `department_id`='$department' and EXTRACT(YEAR FROM date_started)= '$year' ";

            $this->db_fetch_all($sql);

            return $this->db_count();
        }

        function select_project_status($status){
            $sql = "SELECT * FROM `project` WHERE `project_status`='$status'";

            return $this->db_fetch_all($sql);
        }

        function count_project_status($department, $status){
            $sql = "SELECT * FROM `project` WHERE `project_status`='$status' and department_id = $department";

            $this->db_fetch_all($sql);

            return $this->db_count();
        }


        // Srakeholder project

        function select_project_stakeholders($project_id){
            $sql = "SELECT * FROM stakeholder,stakeholder_project,project WHERE stakeholder.stakeholder_id=stakeholder_project.stakeholder_id and stakeholder_project.project_id=project.project_id and stakeholder_project.project_id= '$project_id'";
            return $this->db_fetch_all($sql);
        }

        function count_project_stakeholders($project_id){
            $sql = "SELECT count(stakeholder_id) as count FROM `stakeholder_project` where project_id = $project_id";
            return $this->db_fetch_one($sql);
        }


        
        function insert_stakeholder_project($stakeholder_id, $project_id){
            $sql = "INSERT INTO `stakeholder_project`(`stakeholder_id`, `project_id`) VALUES ('$stakeholder_id','$project_id')";
            return $this->db_query($sql);
        }

        function delete_stakeholder_project($stakeholder_id, $project_id){
            $sql = "DELETE FROM `stakeholder_project` WHERE `stakeholder_id`='$stakeholder_id' and  `project_id`='$project_id' ";
            return $this->db_query($sql);
        }

        function update_stakeholder_project($stakeholder_id, $project_id){
            $sql = "UPDATE `stakeholder_project` SET `stakeholder_id`='$stakeholder_id' WHERE `project_id`='$project_id' ";
            return $this->db_query($sql);
        }

        function select_all_stakeholder_project(){
            $sql = "SELECT * FROM stakeholder,stakeholder_project,project WHERE stakeholder.stakeholder_id=stakeholder_project.stakeholder_id and stakeholder_project.project_id=project.project_id";
            return $this->db_fetch_all($sql);
        }

        function select_one_stakeholder_project($stakeholder_id, $project_id){
            $sql = "SELECT * FROM stakeholder,stakeholder_project,project WHERE stakeholder.stakeholder_id=stakeholder_project.stakeholder_id and stakeholder_project.project_id=project.project_id and project.project_id ='$stakeholder_id' and stakeholder.stakeholder_id='$project_id' ";
            return $this->db_fetch_one($sql);
        }

        function count_projects_in_year($department_id){
            $sql = "SELECT EXTRACT(YEAR FROM date_started) as year, count(project_id) as count FROM project where department_id = $department_id GROUP BY year;";

            return $this->db_fetch_all($sql);
        }

    

    }



?>