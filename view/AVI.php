<?php

require_once dirname(__FILE__)."/../controllers/module_controller.php";
require_once dirname(__FILE__)."/../controllers/stakeholder_controller.php";
require_once dirname(__FILE__)."/../controllers/business_controller.php";
require_once dirname(__FILE__)."/../controllers/grant_controller.php";
require_once dirname(__FILE__)."/../functions/displayBusiness.php";
require_once dirname(__FILE__)."/../functions/tac_businesses.php";
require_once dirname(__FILE__)."/../functions/tac_grant.php";

$business_revenue = business_revenue_in_last_four_years(AVI);
$graph_2_data = graphing_data_for_years_and_business(AVI);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AEC - Ashesi Venture Incubator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="./../css/main.css">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" 
    integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" 
    crossorigin="anonymous" async defer></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" 
    integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" 
    crossorigin="anonymous" async defer></script>
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
                    <img class="nav-logo" src="./../assets/summary-icon.svg" alt="Design Lab Icon">
                    <p>Summary</p>
                </li>
            </a>
            <a href="AVI.php" class="links" id='active'>
                <li class="link">
                    <img class="nav-logo" src="./../assets/avi-icon.svg" alt="Ashesi Venture Incubator Icon">
                    <p>Ashesi Venture Incubator</p>
                </li>
            </a>
            <a href="D-Lab.php" class="links">
                <li class="link">
                    <img class="nav-logo" src="./../assets/dlab-icon.svg" alt="Design Lab Icon">
                    <p>Design Lab</p>
                </li>
            </a>
            <a href="TAC.php" class="links">
                <li class="link">
                    <img class="nav-logo" src="./../assets/tac-icon.svg" alt="Undergraduate Programs Icon">
                    <p>Undergraduate Programs</p>
                </li>
            </a>
        </ul>
    </nav>
    <main id="main">
        <header>
            <h1 class="heading mb-4">Ashesi Venture Incubator</h1>
            <!-- Card Navigations -->
            <ul id="card-navs">
                <a href="./AVI/AVI businesses.php">
                    <li class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-9">
                                    <h5 class="card-title">Businesses - <?php echo number_of_businesses_department_ctr(AVI); ?></h5>
                                    <h6 class="card-subtitle mb-2">
                                    </h6>
                                </div>
                                <div class="col-3">
                                    <img class="card-icons" src="../assets/business-icon.svg" alt="Businesses image">
                                </div>
                            </div>
                        </div> 
                    </li>
                </a>
                <a href="./AVI/AVI modules.php">
                    <li class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-9">
                                    <h5 class="card-title">Modules - <?php echo number_of_modules_ctr(); ?> </h5>
                                </div>
                                <div class="col-3">
                                    <img class="card-icons" src="../assets/modules-icon.svg" alt="Modules image">
                                </div>
                            </div>
                        </div> 
                    </li>
                </a>
                <a href="./AVI/AVI fellows.php">
                    <li class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-9">
                                    <h5 class="card-title">Fellows - <?php echo number_of_avi_fellows(); ?></h5>
                                </div>
                                <div class="col-3">
                                    <img class="card-icons" src="../assets/fellows-icon.svg" alt="Fellows image">
                                </div>
                            </div>
                        </div> 
                    </li>
                </a>
                <a href="./AVI/AVI fellows.php">
                    <li class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-9">
                                    <h5 class="card-title">Total Grant - $<?php echo sum_grant_for_dpt_ctr(AVI)['amount'];?></h5>
                                </div>
                                <div class="col-3">
                                    <img class="card-icons" src="../assets/grants-icon.svg" alt="Student grants image">
                                </div>
                            </div>
                        </div> 
                    </li>
                </a>
                <a href="./AVI/AVI fellows.php">
                    <li class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-9">
                                    <h5 class="card-title"> Total Revenue Generated - $<?php echo select_all_business_revenue_ctr(AVI)['amount'];?></h5>
                                </div>
                                <div class="col-3">
                                    <img class="card-icons" src="../assets/money-icon.svg" alt="Revenue generated image">
                                </div>
                            </div>
                        </div> 
                    </li>
                </a>
                <a href="./AVI/AVI fellows.php">
                    <li class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-9">
                                    <h5 class="card-title">Total Employment Created - <?php echo business_employment_created_by_dpt_ctr(AVI)['number'];?></h5>
                                </div>
                                <div class="col-3">
                                    <img class="card-icons" src="../assets/employment-icon.svg" alt="Employment created image">
                                </div>
                            </div>
                        </div> 
                    </li>
                </a>
            </ul>
        </header>

        <section class="data-viz mt-5">
            <figure>
                <!-- Bar Graph -->
                <div class="bgraph" id="revenue_generated">
                    <!-- Line graph -->
                </div>
                <figcaption class="text-center">
                    <!-- Grants received over the past four(4) years -->
                </figcaption>
            </figure>
            <figure>
                <!-- Bar Graph -->
                <div class="bgraph" id="grant_received">
                    <!-- Line graph -->
                </div>
                <figcaption class="text-center">
                    <!-- Grants received over the past four(4) years -->
                </figcaption>
            </figure>
        </section>
    </main>
    <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
    <script src="../../javascript/charts.js"></script>
    <script>
       draw("area", "revenue_generated", "Total Business Revenue Generated over the past four(4) years", "$amount in dollars", "years", <?php echo $business_revenue ?>);
    
       draw("line", "grant_received", " Grant Received over the past four(4) years", "total amount($)", "grant type", <?php echo  $graph_2_data ?>);

    </script>
</body>
</html>