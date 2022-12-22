<?php 

    require_once("../classes/course_class.php");

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

    function select_course_under_dpt_ctr($department){
        $course = new course;
        return $course->select_course_under_dpt($department);
    }

    function insert_course_student_ctr($course_id, $females, $males, $year){
        $course = new course;
        return $course->insert_course_student($course_id, $females, $males, $year);
    }

    function update_course_student_ctr($course_id, $females, $males, $year){
        $course = new course;
        return $course->update_course_student($course_id, $females, $males, $year);
    }

    function delete_course_student_ctr($course_id, $females, $males, $year){
        $course = new course;
        return $course->delete_course_student($course_id, $females, $males, $year);
    }

    function selet_all_course_student_ctr(){
        $course = new course;
        return $course->selet_all_course_student();
    }

    function selet_a_course_student_ctr($course_id){
        $course = new course;
        return $course->selet_a_course_student($course_id);
    }

    function select_a_course($course_id){
        $course = new course;
        return $course->select_a_course($course_id);
    }

    function select_course_year($year){
        $course = new course;
        return $course->select_course_year($year);
    }


?>