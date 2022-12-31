<?php

require_once dirname(__FILE__) . "/../settings/db_class.php";


class course extends db_connection
{

    function create_course($course_name, $date_started, $desc, $status, $department)
    {
        $sql = "INSERT INTO `course`(`course_name`, `date_started`, `course_description`, `course_status`, `department_id`) VALUES ('$course_name','$date_started','$desc','$status','$department')";
        return $this->db_query($sql);
    }

    function update_course($course_id, $course_name, $date_started, $desc, $status, $department)
    {
        $sql = "UPDATE `course` SET `course_name`=' $course_name',`date_started`='$date_started',`course_description`='$desc`course_status`='$status',`department_id`='$department' WHERE `course_id`='$course_id'";
        return $this->db_query($sql);
    }

    function delete_course($course_id)
    {
        $sql = "DELETE FROM `course` WHERE `course_id`='$course_id'";
        return $this->db_query($sql);
    }

    function select_all_course()
    {
        $sql = "SELECT * FROM `course`";

        return $this->db_fetch_all($sql);
    }

    function select_one_course($course_id)
    {
        $sql = "SELECT * FROM `course` WHERE `course_id`='$course_id' ";

        return $this->db_fetch_one($sql);
    }

    function select_course_under_dpt($department)
    {
        $sql = " SELECT * FROM `course` WHERE `department_id`='$department' ";

        return $this->db_fetch_all($sql);
    }

    function count_course_under_dpt_ctr($department)
    {
        $sql = " SELECT * FROM `course` WHERE `department_id`='$department' ";
        $this->db_fetch_all($sql);

        return $this->db_count();
    }


    // course student

    function insert_course_student($course_id, $females, $males, $year)
    {
        $sql = "INSERT INTO `course_student`(`course_id`, `numberoffemaleStudent`, `numberofmaleStudent`, `course_year`) VALUES ('$course_id','$females',' $males','$year') ";

        return $this->db_query($sql);
    }

    function update_course_student($course_id, $females, $males, $year)
    {
        $sql = "UPDATE `course_student` SET `numberoffemaleStudent`='$females',`numberofmaleStudent`=' $males',`course_year`='$year' WHERE `course_id`='$course_id'";

        return $this->db_query($sql);
    }

    function delete_course_student($course_id, $year)
    {
        $sql = "DELETE FROM `course_student` WHERE `course_id`='$course_id' and `course_year`='$year' ";

        return $this->db_query($sql);
    }

    function selet_all_course_student()
    {
        $sql = "SELECT SUM(numberoffemaleStudent + numberofmaleStudent)  FROM `course_student`";
        return $this->db_fetch_all($sql);
    }

    function selet_a_course_student($course_id)
    {
        $sql = "SELECT SUM(numberoffemaleStudent + numberofmaleStudent) as count FROM `course_student` WHERE `course_id`='$course_id'";
        return $this->db_fetch_one($sql);
    }

    function list_course_student(){
        $sql = "SELECT course.course_id, course.course_name, SUM(numberoffemaleStudent + numberofmaleStudent) as count FROM `course_student`, course where course_student.course_id = course.course_id GROUP BY course.course_id";
        return $this->db_fetch_all($sql);
    }
    /**
     * select the number years a course 
     * run
     */
    function select_a_course($course_id)
    {
        $sql = "SELECT `course_year` FROM `course_student` WHERE  `course_id`='$course_id'";
        return $this->db_fetch_all($sql);
    }


    /**
     * select the number of courses run a particular year
     */
    function select_course_year($year)
    {
        $sql = "SELECT * FROM `course_student` WHERE `course_year`='$year'";
        return $this->db_fetch_all($sql);
    }

    function count_course_project($course_id){
        $sql = "SELECT count(course_project.project_id) as count FROM `course_project` WHERE course_id = $course_id";

        return $this->db_fetch_one($sql);
    }

    function count_course_project_graph(){
        $sql = "SELECT course.course_name, count(course_project.course_id) as count FROM `course_project`, course, project where course.course_id = course_project.project_id and project.project_id = course_project.project_id GROUP BY course_project.course_id;";

        return $this->db_fetch_all($sql);
    }

    function select_course_project($course_id){
        $sql = "SELECT * FROM `course_project`, project where project.project_id = course_project.project_id and course_project.course_id = $course_id";

        return $this->db_fetch_all($sql);
    }

    function count_course_student_gender($course_id){
        $sql = "SELECT SUM(numberoffemaleStudent) as females, SUM(numberofmaleStudent) as males FROM `course_student` where course_id = $course_id;";

        return $this->db_fetch_one($sql);
    }

    function count_course_student_year($course_id, $year){
        $sql = "SELECT course_year, SUM(numberoffemaleStudent + numberofmaleStudent) as students FROM `course_student` where course_year >= $year and course_id=$course_id  GROUP BY course_year";

        return $this->db_fetch_all($sql);
    }

    function course_grant($course_id){
        $sql = "SELECT grants.*,course_grant.grant_id, sum(course_grant.amount_given) as amount FROM course_grant, grants where grants.grant_id = course_grant.grant_id and grants.grant_id = $course_id GROUP BY course_grant.grant_id;";

        return $this->db_fetch_all($sql);
    }

    function grant_for_course($course_id){
        $sql = "SELECT SUM(amount_given) as amount FROM course_grant where course_id = $course_id;";

        return $this->db_fetch_one($sql);
    }
    
    function total_course_students($course_year){
        $sql = "SELECT SUM(numberoffemaleStudent+numberofmaleStudent) as number FROM `course_student` WHERE course_year >= $course_year;";

        return $this->db_fetch_one($sql);
    }



    /**
     * stakeholder modules
     */
    function stakeholder_modules()
    {
        $sql = "SELECT * FROM module,stakeholder_modules,stakeholder WHERE module.module_id=stakeholder_modules.module_id and stakeholder.stakeholder_id=stakeholder_modules.stakeholder_id";
        return $this->db_fetch_all($sql);
    }

    function insert_stakeholder_modules($stakeholder_id, $module_id)
    {
        $sql = "INSERT INTO `stakeholder_modules`(`stakeholder_id`, `module_id`) VALUES ('$stakeholder_id','$module_id')";
        return $this->db_query($sql);
    }

    function delete_stakeholder_modules($stakeholder_id, $module_id)
    {
        $sql = "DELETE FROM `stakeholder_modules` WHERE `stakeholder_id`='$stakeholder_id'and `module_id`='$module_id'";
        return $this->db_query($sql);
    }
}
