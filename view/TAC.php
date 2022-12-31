<?php 
    require_once dirname(__FILE__)."/../functions/tac.php";
    
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
    <link rel="stylesheet" href="../css/main.css">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" 
    integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" 
    crossorigin="anonymous" async defer></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" 
    integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" 
    crossorigin="anonymous" async defer></script>
    <script src="../js/pop.js" async defer></script>
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
            <a href="D-Lab.php" class="links">
                <li class="link">
                    <img class="nav-logo" src="../assets/dlab-icon.svg" alt="Design Lab Icon">
                    <p>Design Lab</p>
                </li>
            </a>
            <a href="TAC.php" class="links" id='active'>
                <li class="link">
                    <img class="nav-logo" src="../assets/tac-icon.svg" alt="Undergraduate Programs Icon">
                    <p>Undergraduate Programs</p>
                </li>
            </a>
        </ul>
    </nav>
    <main id="main">
        <header>
            <h1 class="heading mb-4">Undergraduate Programs</h1>
            <!-- Card Navigations -->
            <ul id="card-navs">
                <a href="./TAC/TAC courses.php">
                    <li class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-9">
                                    <h5 class="card-title">Courses - <?php echo $courses;?></h5>
                                </div>
                                <div class="col-3">
                                    <img class="card-icons" src="../assets/courses-icon.svg" alt="Courses image">
                                </div>
                            </div>
                        </div> 
                    </li>
                </a>
                <a href="./TAC/TAC businesses.php">
                    <li class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-9">
                                    <h5 class="card-title">Student businesses - <?php echo $student_businesses ?></h5>
                                </div>
                                <div class="col-3">
                                    <img class="card-icons" src="../assets/business-icon.svg" alt="Student businesses image">
                                </div>
                            </div>
                        </div> 
                    </li>
                </a>
                <a href="./TAC/TAC grants.php">
                    <li class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-9">
                                    <h5 class="card-title">Student grants - $<?php echo $grants ?></h5>
                                    <h6 class="card-subtitle mb-2">
                                        <ul>
                                            <li>
                                                Internal Grants - $<?php echo $internal_grants ?>
                                            </li>
                                            <li>
                                                External Grants - $<?php echo $external_grants ?>
                                            </li>
                                        </ul>
                                    </h6>
                                </div>
                                <div class="col-3">
                                    <img class="card-icons" src="../assets/grants-icon.svg" alt="Student grants image">
                                </div>
                            </div>
                        </div> 
                    </li>
                </a>
                <a href="./TAC/TAC clubs.php">
                    <li class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-9">
                                    <h5 class="card-title">Campus clubs - <?php echo $clubs; ?></h5>
                                </div>
                                <div class="col-3">
                                    <img class="card-icons" src="../assets/clubs-icon.svg" alt="Campus clubs image">
                                </div>
                            </div>
                        </div> 
                    </li>
                </a>
                <a href="./TAC/TAC events.php">
                    <li class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-9">
                                    <h5 class="card-title">Events - <?php echo $events; ?></h5>
                                </div>
                                <div class="col-3">
                                    <img class="card-icons" src="../assets/events-icon.svg" alt="Events image">
                                </div>
                            </div>
                        </div> 
                    </li>
                </a>
                <a href="./TAC/TAC businesses.php">
                    <li class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-9">
                                    <h5 class="card-title">Student Business Revenue - $<?php echo $business_revenue ?></h5>
                                </div>
                                <div class="col-3">
                                    <img class="card-icons" src="../assets/events-icon.svg" alt="Events image">
                                </div>
                            </div>
                        </div> 
                    </li>
                </a>
                <a href="./TAC/TAC businesses.php">
                    <li class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-9">
                                    <h5 class="card-title">Employment Created - <?php echo $business_employment ?></h5>
                                </div>
                                <div class="col-3">
                                    <img class="card-icons" src="../assets/events-icon.svg" alt="Events image">
                                </div>
                            </div>
                        </div> 
                    </li>
                </a>
                <a href="./TAC/TAC student projects.php">
                    <li class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-9">
                                    <h5 class="card-title">Student Projects - <?php echo $projects ?></h5>
                                </div>
                                <div class="col-3">
                                    <img class="card-icons" src="../assets/events-icon.svg" alt="Events image">
                                </div>
                            </div>
                        </div> 
                    </li>
                </a>
            </ul>
            
        </header>
        <table class="table summary-table">
			<thead>
				<tr class="table-heads thead">
					<th scope="col">
						Summary Statistics In <?php echo $year?>
					</th>
					<th scope="col">

					</th>
				</tr>
			</thead>
			<tbody class="tbody">
				<tr>
					<td>Total Projects Started</td>
					<td><?php echo count_project_under_dpt_in_year_ctr(TAC, $year) ?></td>


				</tr>
				<tr>
					<td>Number Of Business Started</td>
					<td><?php echo number_of_business_in_year_under_dpt_ctr(TAC,$year) ?></td>


				</tr>

				<tr>
					<td>Jobs created by student entrepreneurship businesses</td>
					<td><?php echo $employment_created;?></td>
				</tr>
				<!-- <tr>
					<td>Grants for student projects and businesses</td>
					<td><span>$</span> </td>
				</tr> -->
				<tr>
					<td>Revenue from student entrepreneurship businesses</td>
					<td><span>$</span> <?php echo $revenue_year ?></td>
				</tr>
			</tbody>
		</table>
    </main>
</body>
</html>