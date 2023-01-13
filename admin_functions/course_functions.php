<?php 
    require_once dirname(__FILE__)."/../controllers/course_controller.php";
    require_once dirname(__FILE__)."/../controllers/general_controller.php";
    require_once dirname(__FILE__)."/../controllers/project_controller.php";
    require_once dirname(__FILE__)."/../controllers/grant_controller.php";
    

    function display_course_projects($course_id){
        $projectList = select_course_project($course_id);
        $project_name = "";
        $grant_received = "";
        $date = "";
        $status = "";
        foreach($projectList as $project){
            $project_id = $project['project_id'];
            $project_name = $project['project_name'];
            $date = $project['date_started'];
            $status = project_status($project['project_status']);
            $grant_received = sum_grant_for_project_ctr($project_id)['amount'];
            student_projects_row($project_id,$project_name, $grant_received, $date, $status);
        }
    }

    function list_student_project_row(){
        // $department = 3;
        $projectList = select_project_under_dpt_ctr(TAC);
        $project_name = "";
        $grant_received = "";
        $date = "";
        $status = "";
        foreach($projectList as $project){
            $project_id = $project['project_id'];
            $project_name = $project['project_name'];
            $date = $project['date_started'];
            $status = project_status($project['project_status']);
            $grant_received = sum_grant_for_project_ctr($project_id)['amount'];
            student_projects_row($project_id,$project_name, $grant_received, $date, $status);
        }
    }

    
    function student_projects_row($project_id, $project_name, $grant_received, $date, $status){
        echo "
        <tr>
        <td>
        $project_name
    </td>
    <td>
    $date
    </td>
    <td>
    $$grant_received
      
    </td>
    <td>
        $status
    </td>
    <td>
    <a href='student projects view.php?project_id=$project_id'>
    <button class='btn btn-outline-info'>View</button>
</a>
<button class='btn btn-outline-warning'>Edit</button>
<button class='btn btn-outline-danger' onclick=delete_action('../../actions/deletions/delete_project.php?project_id=$project_id')>Remove</button>
    </td>
        </tr>";
        
    }

    function display_student_project_admin($department){

        $course_list = select_course_under_dpt_ctr($department);
        foreach($course_list as $course){
            $course_id = $course['course_id'];
            $course_name = $course['course_name'];
            $number_of_students = selet_a_course_student_ctr($course_id)['count'];
            $number_of_projects = count_course_project_ctr($course_id)['count'];
            $grant_received = grant_for_course_ctr($course_id)['amount'];
            if($grant_received == NULL){
                $grant_received = 0;
            }
            
            // student_project_row($course)
            student_project_row_admin($course_id,$course_name, $number_of_students, $number_of_projects, $grant_received);
        }
    }

    function student_project_row_admin($course_id,$course_name, $number_of_students, $number_of_projects, $grant_received){
        echo "<tr>
        <td>
            $course_name
        </td>
        <td>
            $number_of_students
        </td>
        <td>
            $number_of_projects
        </td>
        <td>
            $$grant_received
        </td>
        <td>
       <a href='courses view.php?course_id=$course_id'>
            <button class='btn btn-outline-info'>View</button>
        </a>
        <a href='../../forms/edit/edit-course.php?course_id=$course_id'>
            <button class='btn btn-outline-warning'>Edit</button>
        </a>
        <button class='btn btn-outline-danger' onclick=delete_action('../../actions/deletions/delete_course.php?course_id=$course_id')>Remove</button>
        </td>
    </tr>";
    }


    function all_projects(){
        $data = count_all_projects_per_year_ctr();
        $dataPoints = array();
        foreach ($data as $value) {
            array_push($dataPoints, array("y"=>$value['count'], "label"=>$value['year']));
        }

        return json_encode($dataPoints, JSON_NUMERIC_CHECK);
    }


?>