<?php
require_once dirname(__FILE__)."/../../controllers/business_controller.php";
require_once dirname(__FILE__)."/../../controllers/grant_controller.php";
require_once dirname(__FILE__)."/../../functions/displayBusiness.php";
require_once dirname(__FILE__)."/../../functions/avi_businesses.php";
require_once dirname(__FILE__)."/../../functions/tac_grant.php";
require_once dirname(__FILE__)."/../../functions/tac_businesses.php";

$graph_2_data = graphing_data_for_years_and_business(AVI);
$graph_grant_type = graphing_data_busines_type(AVI);
$business_revenue = business_revenue_in_last_four_years(AVI);

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
    <link rel="stylesheet" href="./../../css/main.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ==" crossorigin="anonymous" referrerpolicy="no-referrer" async></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous" defer></script>
    <script src="./../../js/pagination.js" async defer></script>
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
            <a href="../AVI.php" class="links" id='active'>
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
            <a href="../TAC.php" class="links">
                <li class="link">
                    <img class="nav-logo" src="./../../assets/tac-icon.svg" alt="Undergraduate Programs Icon">
                    <p>Undergraduate Programs</p>
                </li>
            </a>
        </ul>
    </nav>
    <main id="main">
        <header>
            <h1 class="heading mb-4">Ashesi Venture Incubator</h1>
            <!-- Breadcrumb -->
            <section aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="../AVI.php">..</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Businesses</li>
                </ol>
            </section>
            <!-- Card Navigations -->
            <ul id="card-navs">
                <a href="AVI business section.php">
                    <li class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-9">
                                    <h5 class="card-title">Female Owner - <?php echo number_of_businesses_by_gender_ctr(AVI, FEMALE);?></h5>
                                </div>
                                <div class="col-3">
                                    <img class="card-icons" src="../../assets/business-icon.svg" alt="Hybrid businesses image">
                                </div>
                            </div>
                        </div> 
                    </li>
                </a>
                <a href="AVI business section.php">
                    <li class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-9">
                                    <h5 class="card-title">Male Owners -<?php echo  number_of_businesses_by_gender_ctr(AVI, MALE);?></h5>
                                </div>
                                <div class="col-3">
                                    <img class="card-icons" src="../../assets/business-icon.svg" alt="NGOs image">
                                </div>
                            </div>
                        </div> 
                    </li>
                </a>
            </ul>
        </header>
        <section>
            <label for="maxRows" class="d-inline">Rows to display</label>
            <select class="form-control d-inline w-25" name="state" id="maxRows">
                <option value="5">5</option>
                <option value="10">10</option>
                <option value="15">15</option>
                <option value="25">25</option>
            </select>
            <div class="d-flex justify-content-between align-items-center">
                <h3>
                    Businesses
                </h3>
                <section>
                    <select name="date-order" id="">
                        <option value="ASC">Ascending</option>
                        <option value="DESC">Descending</option>
                    </select>
                    <button type="submit">Search icon</button>
                </section>
            </div>
            <table class="table" id="table-id">
                <thead>
                    <tr>
                        <th>
                            <strong>Business Name</strong>
                        </th>
                        <th>
                            <strong>Employment Created</strong>
                        </th>
                        <th>
                            <strong>Revenue Generated</strong>
                        </th>
                        <th>
                            <strong>Date created</strong>
                        </th>
                        <th>
                            <strong>Business Sector</strong>
                        </th>
                        <th>

                        </th>
                    </tr>
                </thead>

               
               <tbody>
               <?php showAllBusiness_fnc(AVI);?>
                </tbody> 
            </table>
            <!-- Start Pagination -->
			<div class='pagination-container' >
				<div aria-label="Page navigation example">
				  <ul class="pagination">
                    <li class="page-item" data-page="prev" >
                        <span> &laquo; <span class="sr-only"></span></span>
                    </li>
				   <!--	Here the JS Function Will Add the Rows -->
                    <li class="page-item" data-page="next" id="prev">
                        <span> &raquo; <span class="sr-only"></span></span>
                    </li>
				  </ul>
				</div>
			</div>
            <h6>Total grants received: $<?php echo sum_grant_for_dpt_ctr(AVI)['amount'];?></h6>
            <h6>Total revenue generated: $<?php echo select_all_business_revenue_ctr(AVI)['amount'];?></h6>
            <h6>Total employment created: <?php echo business_employment_created_by_dpt_ctr(AVI)['numbers'];?></h6>
        </section>
        <!-- Data visualization -->
        <section class="data-viz mt-5">
            <figure>
                <!-- Bar Graph -->
                <div class="bgraph" id="gender_graph">
                    Line graph
                </div>
                <figcaption class="text-center">
                    <!-- Grants received over the past four(4) years -->
                </figcaption>
            </figure>
            <figure>
                <!-- Bar Graph -->
                <div class="bgraph" id = "grant_received">
                    Bar graph
                </div>
                <figcaption class="text-center">
                    <!-- Grant Type over the past four(4) years -->
                </figcaption>
            </figure>
            <figure>
                <!-- Bar Graph -->
                <div class="bgraph" id = "grant_type">
                    Pie Char
                </div>
                <figcaption class="text-center">
                    <!-- Show business that has graduated from AVI and those that have not -->
                </figcaption>
            </figure>
            <figure>
                <!-- Bar Graph -->
                <div class="bgraph" id = "revenue_generated">
                    Line Graph 
                </div>
                <figcaption class="text-center">
                 <!-- Line Graph to show the progression of revenue generated from business -->
                </figcaption>
            </figure>
            <figure>
                <!-- Bar Graph -->
                <div class="bgraph" id = "graph_2">
                    Pie Chart
                </div>
                <figcaption class="text-center">
                    Pie chart to show the gender division of Business owners
                </figcaption>
            </figure>
        </section>
    </main>
    <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
    <script src="../../javascript/charts.js"></script>
    <script>
        draw("pie", "gender_graph", "Division of business owners by gender", "Number of owners", "Gender", <?php echo  $dataPoints ?>);

       draw("column", "grant_received", " Grant Received over the past four(4) years", "total amount($)", "grant type", <?php echo  $graph_2_data ?>);

       draw("pie", "grant_type", " Grant Type over the past four(4) years", "total amount($)", "grant type", <?php echo $graph_grant_type ?>);

       draw("line", "revenue_generated", "Total Business Revenue Generated over the past four(4) years", "$amount in dollars", "years", <?php echo $business_revenue ?>);
    </script>
</body>
</html>