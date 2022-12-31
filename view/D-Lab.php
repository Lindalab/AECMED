<?php
require_once dirname(__FILE__) . "/../controllers/project_controller.php";
require_once dirname(__FILE__) . "/../controllers/event_controller.php";
require_once dirname(__FILE__) . "/../controllers/grant_controller.php";
require_once dirname(__FILE__)."/../functions/tac.php";
require_once dirname(__FILE__)."/../functions/tac_events.php";
require_once dirname(__FILE__)."/../functions/tac_grant.php";
require_once dirname(__FILE__) . "/../functions/tac_student_project.php";

$graph_1_data = graphing_data_for_years_and_business(D_Lab);
$graph_2_data = graphing_data_busines_type(D_Lab);
$events = graph_event_attendance_year(D_Lab);
$projects = graphing_years_and_projects(D_Lab);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AEC - Design Lab</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/main.css">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous" async defer></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous" async defer></script>
    <script src="./../js/pop.js" async defer></script>
</head>

<body>
    <nav>
        <header class="nav-head pt-4">
            <h1>AEC</h1>
        </header>
        <ul id="list">
            <a href="Summary.php" class="links">
                <li class="link">
                    <img class="nav-logo" src="../assets/summary-icon.svg" alt="Design Lab Icon">
                    <p>Summary</p>
                </li>
            </a>
            <a href="AVI.php" class="links">
                <li class="link">
                    <img class="nav-logo" src="../assets/avi-icon.svg" alt="Ashesi Venture Incubator Icon">
                    <p>Ashesi Venture Incubator</p>
                </li>
            </a>
            <a href="D-Lab.php" class="links" id='active'>
                <li class="link">
                    <img class="nav-logo" src="../assets/dlab-icon.svg" alt="Design Lab Icon">
                    <p>Design Lab</p>
                </li>
            </a>
            <a href="TAC.php" class="links">
                <li class="link">
                    <img class="nav-logo" src="../assets/tac-icon.svg" alt="Undergraduate Programs Icon">
                    <p>Undergraduate Programs</p>
                </li>
            </a>
        </ul>
    </nav>
    <main id="main">
        <header>
            <h1 class="heading mb-4">Design Lab</h1>
            <!-- Card Navigations -->
            <ul id="card-navs">
                <a href="./D-Lab/D-Lab Section.php">
                    <li class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-9">
                                    <h5 class="card-title">Projects - <?php echo count_project_under_dpt(D_Lab)['number'] ?></h5>
                                    <h6 class="card-subtitle mb-2">
                                        <ul>
                                            <li>
                                                Platform projects - 23
                                            </li>
                                            <li>
                                                Fellow projects - 18
                                            </li>
                                        </ul>
                                    </h6>
                                </div>
                                <div class="col-3">
                                    <img class="card-icons" src="../assets/projects-icon.svg" alt="Projects image">
                                </div>
                            </div>
                        </div>
                    </li>
                </a>
                <a href="./D-Lab/D_Lab_Events.php">
                    <li class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-9">
                                    <h5 class="card-title">Events - <?php echo count_event_for_department_ctr(D_Lab); ?></h5>
                                </div>
                                <div class="col-3">
                                    <img class="card-icons" src="../assets/events-icon.svg" alt="Events image">
                                </div>
                            </div>
                        </div>
                    </li>
                </a>
                <a href="./D-Lab/D-Lab_Grants.php">
                    <li class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-9">
                                    <h5 class="card-title">Grants - $<?php echo sum_grant_for_dpt_ctr(D_Lab)['amount'] ?></h5>
                                    <h6 class="card-subtitle mb-2">
                                        <ul>
                                            <li>
                                                Internal Grants - $<?php echo grant_department_and_type_ctr(D_Lab, INTERNAL)['amount'] ?>
                                            </li>
                                            <li>
                                                External Grants - $<?php echo grant_department_and_type_ctr(D_Lab, EXTERNAL)['amount'] ?>
                                            </li>
                                        </ul>
                                    </h6>
                                </div>
                                <div class="col-3">
                                    <img class="card-icons" src="../assets/grants-icon.svg" alt="Grants image">
                                </div>
                            </div>
                        </div>
                    </li>
                </a>
            </ul>
        </header>
        <section>
            <h3>All round statistics</h3>
        </section>
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
                    Bar graph
                </div>
                <figcaption class="text-center">
                    <!-- Grant Type over the past four(4) years -->
                </figcaption>
            </figure>
            <figure>
                <!-- Bar Graph -->
                <div class="bgraph" id="projects">
                    Bar graph
                </div>
                <figcaption class="text-center">
                    <!-- Grant Type over the past four(4) years -->
                </figcaption>
            </figure>
            <figure>
                <!-- Bar Graph -->
                <div class="bgraph" id="events">
                    Bar graph
                </div>
                <figcaption class="text-center">
                    <!-- Grant Type over the past four(4) years -->
                </figcaption>
            </figure>
        </section>
        <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
        <script src="../../javascript/charts.js"></script>
        <script>
            draw("area", "graph_1", "Grants received over the past four(4) years", "amount_receieved", "year", <?php echo $graph_1_data ?>);

            draw("pie", "graph_2", " Grant Type over the past four(4) years", "total amount($)", "grant type", <?php echo $graph_2_data ?>);

            draw("column", "events", "Events hosted over the past four(4) years", "attendance", "year", <?php echo $events ?>);

            draw("doughnut", "projects", "Student Projects Per Year", "number of projects", "year", <?php echo $projects ?>);
        </script>
    </main>
</body>

</html>