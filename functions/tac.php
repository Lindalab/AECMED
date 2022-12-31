<?php
require_once dirname(__FILE__) . "/../controllers/course_controller.php";
require_once dirname(__FILE__) . "/../controllers/event_controller.php";
require_once dirname(__FILE__) . "/../controllers/business_controller.php";
require_once dirname(__FILE__) . "/../controllers/grant_controller.php";
require_once dirname(__FILE__) . "/../controllers/clubs_controller.php";
require_once dirname(__FILE__) . "/../controllers/project_controller.php";
// require_once("../controllers/business_controller.php")

$department = TAC;
$year = date("Y") - 1;

$courses = count_course_under_dpt_ctr($department);
$events = count_event_for_department_ctr($department);
$student_businesses = number_of_businesses_department_ctr($department);
$grants = sum_grant_for_dpt_ctr($department)['amount'];
$internal_grants = grant_department_and_type_ctr($department, INTERNAL)['amount'];
$external_grants = grant_department_and_type_ctr($department, EXTERNAL)['amount'];
$clubs = count_clubs_ctr();
$business_revenue = total_business_revenue_for_a_department($department)['amount'];

$business_employment = business_employment_created_by_dpt_ctr($department)['numbers'];

$projects = count_project_under_dpt(TAC)['number'];

$employment_created =  business_employment_created_in_year_ctr(TAC, $year)['number'];
if($employment_created == NULL){
    $employment_created = 0;
}

$revenue_year = business_revenue_in_a_year_ctr(TAC,$year)['revenue'];

// print_r($employment_created);