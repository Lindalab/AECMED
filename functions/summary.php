<?php 
    require_once dirname(__FILE__)."/../controllers/project_controller.php";
    require_once dirname(__FILE__)."/../controllers/grant_controller.php";
    require_once dirname(__FILE__)."/../controllers/event_controller.php";
    require_once dirname(__FILE__)."/../controllers/business_controller.php";
   
    function employment_numbers($department){
        $result = business_employment_created_by_dpt_ctr($department);
        if( $result != NULL){
            return $result['number'];
        }else{
            return 0;
        }
    }

    // print_r(sum_grant_for_dpt_ctr(TAC)['amount']);
    $total_projects = count_all_project_ctr();
    $d_lab_projects = count_project_under_dpt(D_Lab)['number'];
    $tac_projects = count_project_under_dpt(TAC)['number'];
    $avi_projects = count_project_under_dpt(AVI)['number'];
    $total_grants = sum_all_grant_ctr()['amount'];
    $avi_grants = sum_grant_for_dpt_ctr(AVI)['amount'];
    $d_lab_grants = sum_grant_for_dpt_ctr(D_Lab)['amount'];
    $tac_grants = sum_grant_for_dpt_ctr(TAC)['amount'];
    $total_events = count_all_event_ctr();
    $avi_events = count_event_for_department_ctr(AVI);
    $d_lab_event = count_event_for_department_ctr(D_Lab);
    $tac_events = count_event_for_department_ctr(TAC);
    $total_business_revenue = total_business_revenue_ctr()['amount'];
    $avi_business_revenure = total_business_revenue_for_a_department(AVI)['amount'];
    $tac_business_revenure = total_business_revenue_for_a_department(TAC)['amount'];
//    = total_business_employment_created_ctr()['number'];
    $avi_employment_created = employment_numbers(AVI);
    $tac_employment_created = employment_numbers(TAC);
    
    $total_employment_created = $avi_employment_created+$tac_employment_created;

    $total_businesses = number_of_businesses_ctr();
    $avi_businesses = number_of_businesses_department_ctr(AVI);
    $tac_businesses = number_of_businesses_department_ctr(TAC);

    $males = number_of_male_attendance_ctr(TAC)['males'];
    $females = number_of_female_attendance_ctr(TAC)['females'];
    $total_participants = $males + $females;

    $dlab_males = number_of_male_attendance_ctr(D_Lab)['males'];
    $dlab_females = number_of_female_attendance_ctr(D_Lab)['females'];
    $dlab_total_participants = $dlab_males + $dlab_females;

    $avi_business_grant_received = total_grant_for_business_in_dpt_ctr(AVI);
    $tac_business_grant_received =  total_grant_for_business_in_dpt_ctr(TAC);
  
?>