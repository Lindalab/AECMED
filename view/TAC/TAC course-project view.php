<?php 
    require_once dirname(__FILE__)."/../../controllers/project_controller.php";
    require_once dirname(__FILE__)."/../../functions/tac_student_course_project_view.php";
    

    $project_id = $_GET['project_id'];
    $project_details = select_one_project_ctr($project_id);

    $project_name = $project_details['project_name'];
    $date_started = $project_details['date_started'];
    $desc = $project_details['project_description'];

    

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AEC - Design Lab</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="./../../css/main.css">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" 
    integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" 
    crossorigin="anonymous" async defer></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" 
    integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" 
    crossorigin="anonymous" async defer></script>
    <script src="./../../js/pop.js" async defer></script>
</head>
<body>
    <nav>
        <header class="nav-head pt-4">
            <h1>AEC</h1>
        </header>
        <ul id="list">
            <a href="../Summary.php" class="links">
                <li class="link">
                    <img class="nav-logo" src="./../../assets/summary-icon.svg" alt="Design Lab Icon">
                    <p>Summary</p>
                </li>
            </a>
            <a href="../AVI.php" class="links">
                <li class="link">
                    <img class="nav-logo" src="./../../assets/avi-icon.svg" alt="Ashesi Venture Incubator Icon">
                    <p>Ashesi Venture Incubator</p>
                </li>
            </a>
            <a href="../D-Lab.php" class="links">
                <li class="link">
                    <img class="nav-logo" src="./../../assets/dlab-icon.svg" alt="Design Lab Icon">
                    <p>Design Lab</p>
                </li>
            </a>
            <a href="../TAC.php" class="links" id='active'>
                <li class="link">
                    <img class="nav-logo" src="./../../assets/tac-icon.svg" alt="Teaching Across Curriculum Icon">
                    <p>Teaching Across Curriculum</p>
                </li>
            </a>
        </ul>
    </nav>
    <main id="main">
        <header>
            <h1 class="heading mb-4">Teaching Across Curriculum</h1>
            <section aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="../TAC.php">..</a></li>
                  <li class="breadcrumb-item"><a href="TAC courses.php">Courses</a></li>
                  <li class="breadcrumb-item"><a href="TAC Section-view.php">Courses(View)</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Course Project(View)</li>
                </ol>
            </section>
        </header>
        <section>
            <header>
                <h3><small>Course Project: </small><?php echo $project_name;?></h3>
                <p>Date Commenced: <?php echo $date_started ?></p>
            </header>
            <br>
            <!-- Course Heads -->
            <ul>
                <h5>Course Project Members</h5>
                 <?php 
                    project_stakeholder($project_id);
                 ?>
            </ul>
            <!-- Project Description -->
            <h5>
                Course Project Description
            </h5>
            <p>
                <?php echo $desc ?>
            </p>
            <br>
            <h5>Grants Received</h5>
            <p>
              <?php 
                show_project_grant($project_id);
              ?>
            </p>
            <br>
        </section>
    </main>
</body>
</html>