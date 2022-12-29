<?php 
     require_once dirname(__FILE__)."/../controllers/project_controller.php";


    function graphing_years_and_projects(){
        $list = count_projects_in_year_ctr(TAC);
        $dataPoints = array();
        foreach ($list as $year) {
            array_push($dataPoints, array("y" => $year['count'], "label" => $year['year']));
        }

        return json_encode($dataPoints, JSON_NUMERIC_CHECK);
    }

    function list_student_project_row(){
        // $department = 3;
        $projectList = select_project_under_dpt_ctr(TAC);
        $project_name = "";
        $number_of_student = "";
        $date = "";
        $status = "";
        foreach($projectList as $project){
            $project_id = $project['project_id'];
            $project_name = $project['project_name'];
            $date = $project['date_started'];
            $status = project_status($project['project_status']);
            $number_of_student = count_project_stakeholders_ctr($project_id)['count'];
            student_projects_row($project_name, $number_of_student, $date, $status);
        }
    }


    function student_projects_row($project_name, $number_of_student, $date, $status){
        echo "
        <tr>
        <td>
        $project_name
    </td>
    <td>
        $number_of_student
    </td>
    <td>
        $date
    </td>
    <td>
        $status
    </td>
    <td>
        <a href='TAC course-project view.php'>
            <img src='./../../assets/read-more.svg' alt='View icon'>
        </a>
    </td>
        </tr>";
        
    }

    function project_status($status){
        if($status == 1){
            return "active";
        }else{
            return "inactive";
        }
    }


?>