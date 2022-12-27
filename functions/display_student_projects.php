<?php 
    require_once dirname(__FILE__)."/../controller/project_controller.php";

    function display_student_project(){
        
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