<?php
require_once dirname(__FILE__) . "/../settings/db_class.php";

class Cohort extends db_connection
{
    function cohort_stakeholder_by_year()
    {
        $sql = "SELECT cohort_year, COUNT(cohort.cohort_year) as count FROM cohort_business, cohort WHERE cohort_business.cohort_id = cohort.cohort_id GROUP BY cohort.cohort_year;";

        return $this->db_fetch_all($sql);
    }
}
