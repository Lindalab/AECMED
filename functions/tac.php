<?php 
    require_once dirname(__FILE__)."/../controllers/course_controller.php";
    require_once dirname(__FILE__)."/../controllers/event_controller.php";
   require_once dirname(__FILE__)."/../controllers/business_controller.php";
    require_once dirname(__FILE__)."/../controllers/grant_controller.php";
   // require_once("../controllers/business_controller.php")

    $department = TAC;
    
    $courses = count_course_under_dpt_ctr($department);
    $events = count_event_for_department_ctr($department);
    $student_businesses = number_of_businesses_department_ctr($department);
    $grants = sum_grant_for_dpt_ctr($department)['amount'];
    $internal_grants = grant_department_and_type_ctr($department,INTERNAL)['amount'];
    $external_grants = grant_department_and_type_ctr($department,EXTERNAL)['amount'];
    $clubs = 21;
    $business_revenue = total_business_revenue_for_a_department($department)['amount'];

    $business_employment = business_employment_created_by_dpt_ctr($department)['numbers'];
?>