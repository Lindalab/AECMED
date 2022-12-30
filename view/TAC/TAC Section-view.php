<?php 
    require_once dirname(__FILE__)."/../../functions/tac_courses.php";
    $course_id = $_GET['course_id'];
    $course =  select_one_course_ctr($course_id);
    $course_name = $course['course_name'];
    $course_description = $course['course_description'];
    $date = $course['date_started'];
    $year = date("Y") - 4;
    $graph_2_data = data_for_course_student_year($course_id, $year);
    
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
                  <li class="breadcrumb-item active" aria-current="page">Courses(View)</li>
                </ol>
            </section>
        </header>
        <section>
            <header>
                <h3>Course: <?php echo  $course_name?></h3>
                <p>Date Commenced: <?php echo $date ?></p>
            </header>
            <br>
            <!-- Course Heads -->
            <h5>Course Heads</h5>
            <div class="view-sec">
                <section class="view">
                    <figure class="img-frame">
                        <img class="img-view" src="../../assets/dummy.png" alt="img name">
                        <figcaption>
                            Gupta Sanchez <br>
                            <sub class="text-muted">gupta@gmail.com</sub>
                        </figcaption>
                    </figure>
                    <figure class="img-frame">
                        <img class="img-view" src="../../assets/dummy.png" alt="img name">
                        <figcaption>
                            Gupta Sanchez <br>
                            <sub class="text-muted">gupta@gmail.com</sub>
                        </figcaption>
                    </figure>
                    <figure class="img-frame">
                        <img class="img-view" src="../../assets/dummy.png" alt="img name">
                        <figcaption>
                            Gupta Sanchez <br>
                            <sub class="text-muted">gupta@gmail.com</sub>
                        </figcaption>
                    </figure>
                    <figure class="img-frame">
                        <img class="img-view" src="../../assets/dummy.png" alt="img name">
                        <figcaption>
                            Gupta Sanchez <br>
                            <sub class="text-muted">gupta@gmail.com</sub>
                        </figcaption>
                    </figure>
                </section>
            </div>
            <!-- Project Description -->
            <h5>
                Course Description
            </h5>
            <p>
                <?php echo $course_description ?>
            </p>
            <br>
            <h5>Grants Received</h5>
            <p>
            <?php course_count_list($course_id)?>
                
            </p>
            <br>
            <h5>Course Projects</h5>
            <table class="table">
                <thead>
                    <tr>
                        <th>
                            <strong>Project Name</strong>
                        </th>
                        <th>
                            <strong>Number of Students</strong>
                        </th>
                        <th>
                            <strong>Date commenced</strong>
                        </th>
                        <th>
                            <strong>Project Status</strong>
                        </th>
                        <th>

                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php display_course_project() ?>
                    <!-- <tr>
                        <td>
                            Smart Bins
                        </td>
                        <td>
                            5
                        </td>
                        <td>
                            2019-04-32
                        </td>
                        <td>
                            Inactive
                        </td>
                        <td>
                            <a href="TAC course-project view.php">
                                <img src="./../../assets/read-more.svg" alt="View icon">
                            </a>
                        </td>
                    </tr> -->
                </tbody>
            </table>
        </section>
         <!-- Data visualization -->
         <section class="data-viz mt-5">
            <figure>
                <!-- Bar Graph -->
                <div class="bgraph" id="graph_1">
                    Line graph
                </div>
                <figcaption class="text-center">
                    <!-- Grants received over the past four(4) years -->
                </figcaption>
            </figure>
            <figure>
                <!-- Bar Graph -->
                <div class="bgraph" id="graph_2">
                 gender division of course students divided by gender
                </div>
                <figcaption class="text-center">
                    <!-- Grant Type over the past four(4) years -->
                </figcaption>
            </figure>
        </section>
    </main>
    <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
    <script src="../../javascript/charts.js"></script>
    <script>
        draw("pie", "graph_1", "Gender Division Of Students", "number of students", "courses", <?php echo data_for_course_student_gender_graph($course_id) ?>);

        draw("line", "graph_2", "<?php echo $course_name?> Student Enrolment", "number of students", "years", <?php echo $graph_2_data ?>);
    </script>
</body>
</html>