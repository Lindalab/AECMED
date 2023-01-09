<?php 
    require_once dirname(__FILE__)."/../../functions/displayStakeholders.php";
    $graph_1_data = fellow_gender_data(AVI);
    $graph_2_data = cohort_numbers();

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
                  <li class="breadcrumb-item active" aria-current="page">Fellows</li>
                </ol>
            </section>
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
                    Fellows Details
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
                            <strong>Fellow Cohort</strong>
                        </th>
                        <th>
                            <strong>Fellow Name</strong>
                        </th>
                        <th>
                            <strong>Business Name</strong>
                        </th>
                        <th>
                            <strong>Gender</strong>
                        </th>
                        <th>

                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php showAllAviFellows_fnc(AVI);?>
                    <!-- <tr>
                        <td>
                            Fellow Cohort
                        </td>
                        <td>
                            Fellow Name
                        </td>
                        <td>
                            Business Name
                        </td>
                        <td>
                            Gender
                        </td>
                        <td>
                            <a href="AVI fellow-view.php">
                                <img src="./../../assets/read-more.svg" alt="View icon">
                            </a>
                        </td>
                    </tr> -->
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
            <h6>Total grants received: $35000</h6>
            <h6>Total revenue generated: $5000</h6>
            <h6>Total employment created: 1000</h6>
        </section>
        <!-- Data visualization -->
        <section class="data-viz mt-5">
            <figure>
                <!-- Bar Graph -->
                <div class="bgraph" id="gender_graph">
                    <!-- Line graph -->
                </div>
                <figcaption class="text-center">
                    <!-- Grants received over the past four(4) years -->
                </figcaption>
            </figure>
            <figure>
                <!-- Bar Graph -->
                <div class="bgraph" id="bar">
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
      draw("pie", "gender_graph", "Division Of Fellow by gender", "Fellows", "Gender", <?php echo  $graph_1_data ?>);


      draw("column", "bar", " Cohorts And Number Of Individualw", "", "", <?php  echo  $graph_2_data ?>);

       </script>
</body>
</html>