<?php 
    require_once dirname(__FILE__)."/../../functions/tac.php";
    require_once dirname(__FILE__)."/../../functions/tac_grant.php";

    $graph_1_data = graphing_data_for_years_and_business(AVI);
    $graph_2_data = graphing_data_busines_type(AVI);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AEC - Undergraduate Programs</title>
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
            <a href="../AVI.php" class="links">
                <li class="link">
                    <img class="nav-logo" src="./../../assets/avi-icon.svg" alt="Ashesi Venture Incubator Icon">
                    <p>Ashesi Venture Incubator</p>
                </li>
            </a>
            <a href="../D-Lab.php" class="links"  id='active'>
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
            <h1 class="heading mb-4">Design Lab</h1>
            <!-- Breadcrumb -->
            <section aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="../TAC.php">..</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Grants</li>
                </ol>
            </section>
            <!-- Card Navigations -->
            <ul id="card-navs">
                <a href="D_Lab grants-section.php?grant_type=<?php echo INTERNAL?>">
                    <li class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-9">
                                    <h5 class="card-title">Internal Grants - $<?php echo  $internal_grants ?></h5>
                                </div>
                                <div class="col-3">
                                    <img class="card-icons" src="../../assets/grants-icon.svg" alt="Internal Grants image">
                                </div>
                            </div>
                        </div> 
                    </li>
                </a>
                <a href="D_Lab grants-section.php?grant_type=<?php echo EXTERNAL?>">
                    <li class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-9">
                                    <h5 class="card-title">External Grants - $<?php echo  $external_grants ?></h5>
                                </div>
                                <div class="col-3">
                                    <img class="card-icons" src="../../assets/grants-icon.svg" alt="External Grants image">
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
                    Grants
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
                            <strong>Company</strong>
                        </th>
                        <th>
                            <strong>Number of Beneficiaries</strong>
                        </th>
                        <th>
                            <strong>Amount donated</strong>
                        </th>
                        <th>
                            <strong>Date donated</strong>
                        </th>
                        <th>
                            <strong>Grant Type</strong>
                        </th>
                        <th>

                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        show_grants(D_Lab);
                    ?>
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
                    Bar graph
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
        draw("line", "graph_1", "Grants received over the past four(4) years", "amount_receieved", "year", <?php echo $graph_1_data ?>);

        draw("pie", "graph_2", " Grant Type over the past four(4) years", "total amount($)", "grant type", <?php echo $graph_2_data ?>);
    </script>
</body>
</html>