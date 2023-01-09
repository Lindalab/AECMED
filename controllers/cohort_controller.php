<?php 
    require_once dirname(__FILE__)."/../classes/cohort_class.php";

    function cohort_stakeholder_by_year_ctr(){
        $cohort = new Cohort;
        
        return $cohort->cohort_stakeholder_by_year();
    }

?>