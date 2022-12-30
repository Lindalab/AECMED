<?php 
    require_once dirname(__FILE__)."/../../controllers/clubs_controller.php";

    $club = select_one_club_ctr($_GET['club_id']);
    $club_name = $club['name'];
    $club_date = $club['date_registered'];
    $club_members = $club['number_of_members'];
    $description = $club['description'];
    $males =  $club['number_of_males'];
    $females = $club['number_of_females'];

    $dataPoints = array();

    array_push($dataPoints, array("y"=>$males, "label"=>"males"), array("y"=>$females, "label"=>"females"));

    $dataPoints = json_encode($dataPoints, JSON_NUMERIC_CHECK);
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AEC - Teaching Across Curriculum</title>
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
                  <li class="breadcrumb-item"><a href="TAC clubs.php">Clubs</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Clubs(View)</li>
                </ol>
            </section>
        </header>
        <section>
            <header>
                <h3>Club Name: <?php echo $club_name ?></h3>
                <p>Number of members: <?php echo $club_members ?></p>
                <p>Club Registration date: <?php echo $club_date ?></p>
            </header>
            <br>
            <h5>
                Club Description
            </h5>
            <p>
                <?php echo $description ?>
            </p>
            <br>
        </section>
         <!-- Data visualization -->
         <section class="data-viz mt-5">
            <figure>
                <!-- Bar Graph -->
                <div class="bgraph" id="graph_1">
                    Bar graph for student projects for past four years
                </div>
                <figcaption>
                    <!-- Student Projects for the past four(4) years -->
                </figcaption>
            </figure>

        </section>
    </main>
    <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
    <script src="../../javascript/charts.js"></script>
    <script>
        draw("pie", "graph_1", "Gender Division For Club Members", "number of students", "Gender", <?php print_r($dataPoints) ?>);
    </script>
</body>
</html>