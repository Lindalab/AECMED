<?php 

require_once dirname(__FILE__)."/../classes/course_class.php";

    function create_course_ctr($course_name, $date_started, $desc, $status, $department){
        $business = new course;
        return $business->create_course($course_name, $date_started, $desc, $status, $department);
    }

    function update_course_ctr($course_id, $course_name, $date_started, $desc, $status, $department){
        $course = new course;
        return $course->update_course($course_id, $course_name, $date_started, $desc, $status, $department);
    }

    function delete_course_ctr($course_id){
        $course = new course;
        return $course->delete_course($course_id);
    }

    function select_all_course_ctr(){
        $course = new course;
        return $course->select_all_course();
    }

    function select_one_course_ctr($course_id){
        $course = new course;
        return $course->select_one_course($course_id);
    }

    function select_one_course_name_ctr($course_name){
        $course = new course;
        return $course->select_one_course_name($course_name);   
    }

    function select_course_under_dpt_ctr($department){
        $course = new course;
        return $course->select_course_under_dpt($department);
    }

    function count_course_under_dpt_ctr($department){
        $course = new course;
        return $course->count_course_under_dpt_ctr($department);
    }

    function insert_course_student_ctr($course_id, $females, $males, $year){
        $course = new course;
        return $course->insert_course_student($course_id, $females, $males, $year);
    }

    function update_course_student_ctr($course_id, $females, $males, $year){
        $course = new course;
        return $course->update_course_student($course_id, $females, $males, $year);
    }

    function delete_course_student_ctr($course_id, $year){
        $course = new course;
        return $course->delete_course_student($course_id, $year);
    }

    function selet_all_course_student_ctr(){
        $course = new course;
        return $course->selet_all_course_student();
    }

    function selet_a_course_student_ctr($course_id){
        $course = new course;
        return $course->selet_a_course_student($course_id);
    }

    function list_course_student_ctr(){
        $course = new course;
        return $course->list_course_student();
    }

    function select_a_course_ctr($course_id){
        $course = new course;
        return $course->select_a_course($course_id);
    }

    function select_course_year_ctr($year){
        $course = new course;
        return $course->select_course_year($year);
    }


    function stakeholder_modules(){
        $course = new course;
        return $course->stakeholder_modules();
    }

    function insert_stakeholder_modules_ctr($stakeholder_id, $module_id){
        $course = new course;
        return $course->insert_stakeholder_modules($stakeholder_id, $module_id);
    }

    function delete_stakeholder_modules_ctr($stakeholder_id, $module_id){
        $course = new course;
        return $course->delete_stakeholder_modules($stakeholder_id, $module_id);
    }

    function count_course_project_ctr($course_id){
        $course = new course;
        return $course->count_course_project($course_id);
    }

    function count_course_project_graph_ctr(){
        $course = new course;
        return $course->count_course_project_graph();
    }

    function select_course_project($course_id){
        $course = new course;
        return $course->select_course_project($course_id);
    }

    

    function count_course_student_gender_ctr($course_id){
        $course = new course;
        return $course->count_course_student_gender($course_id);
    }

    function count_course_student_year_ctr($course_id, $year){
        $course = new course;
        return $course->count_course_student_year($course_id, $year);
    }

    function course_grant_ctr($course_id){
        $course = new course;
        return $course->course_grant($course_id);
    }
    
    function grant_for_course_ctr($course_id){
        $course = new course;
        return $course->grant_for_course($course_id);
    }

    function total_course_students_ctr($course_year){
        $course = new course;
        return $course->total_course_students($course_year)['number'];
    }
?>
