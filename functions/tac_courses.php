<?php 
    require_once dirname(__FILE__)."/../controllers/project_controller.php";
    require_once dirname(__FILE__)."/../controllers/course_controller.php";
    
    function list_of_courses_and_student(){
        $list = list_course_student_ctr();
        $dataPoints = array();
        foreach ($list as $course) {
            array_push($dataPoints, array("y" => $course['count'], "label" => $course['course_name']));
        }

        return json_encode($dataPoints, JSON_NUMERIC_CHECK);
    }

    function graph_course_project(){
        $list = count_course_project_graph_ctr();
        $dataPoints = array();
        foreach ($list as $course) {
            array_push($dataPoints, array("y" => $course['count'], "label" => $course['course_name']));
        }

        return json_encode($dataPoints, JSON_NUMERIC_CHECK);
    }


    function display_student_project(){
        $department = 3;
        $course_list = select_course_under_dpt_ctr($department);
        foreach($course_list as $course){
            $course_id = $course['course_id'];
            $course_name = $course['course_name'];
            $number_of_students = selet_a_course_student_ctr($course_id)['count'];
            $number_of_projects = count_course_project_ctr($course_id)['count'];
            $grant_received = 100;
            
            // student_project_row($course)
            student_project_row($course_name, $number_of_students, $number_of_projects, $grant_received);
        }
    }


    function student_project_row($course_name, $number_of_students, $number_of_projects, $grant_received){
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
            <a href='TAC Section-view.php'>
                <img src='./../../assets/read-more.svg' alt='View icon'>
            </a>
        </td>
    </tr>";
    }

?>