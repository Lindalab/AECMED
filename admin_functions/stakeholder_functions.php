<?php 
    require_once dirname(__FILE__)."/../controllers/stakeholder_controller.php";

    
    function display_fellow($department){
        $fellow_list = get_avi_fellows_ctr($department);
        $id = "";
        $fname = "";
        $lname = "";
        $gender = "";
        $email = "";
        $phone = "";
        $cohort = "";

        foreach($fellow_list as $fellow){
            $id = $fellow['stakeholder_id'];
            $fname = $fellow['first_name'];
            $lname = $fellow['last_name'];
            $gender = $fellow['gender'];
            $email = $fellow['email'];
            $phone = $fellow['phone'];
            $cohort = $fellow['cohort_year'];
            stakeholder_row($id, $fname, $lname, $gender, $email, $phone, $cohort);
        }
    }

    function stakeholder_row($id, $fname, $lname, $gender, $email, $phone, $cohort){
        echo "<tr>
        <td>$fname</td>
        <td>$lname</td>
        <td>$gender</td>
        <td>$email</td>
        <td>$phone</td>
        <td>$cohort</td>
        <td>
            <a href='fellows view.php?stakeholder_id=$id'>
                <button class='btn btn-outline-info'>View</button>
            </a>
            <a href='../../forms/edit/edit-business.php'>
                <button class='btn btn-outline-warning'>Edit</button>
            </a>
            <button class='btn btn-outline-danger' onclick=delete_action('../../actions/deletions/delete_stakeholder.php?stakeholder_id=$id')>Remove</button>
        </td>
    </tr>";
    }

?>