<?php 
    require_once dirname(__FILE__)."/../functions/summary.php";
    require_once dirname(__FILE__)."/../admin_functions/business_functions.php";
    require_once dirname(__FILE__)."/../admin_functions/grant_functions.php";
    require_once dirname(__FILE__)."/../admin_functions/event_functions.php";
    require_once dirname(__FILE__)."/../admin_functions/course_functions.php";

    $graph_1_data = graph_business_revenue_years();
    $graph_2_data = grants_per_year();
    $graph_3_data = event_per_year();
    $graph_4_data = all_projects();
    
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/libs/css/style.css">
    <link rel="stylesheet" href="assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <link rel="stylesheet" href="assets/vendor/charts/chartist-bundle/chartist.css">
    <link rel="stylesheet" href="assets/vendor/charts/morris-bundle/morris.css">
    <link rel="stylesheet" href="assets/vendor/fonts/material-design-iconic-font/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/vendor/charts/c3charts/c3.css">
    <link rel="stylesheet" href="assets/vendor/fonts/flag-icon-css/flag-icon.min.css">
    <title>AEC - Summary</title>
</head>

<body>
    <!-- ============================================================== -->
    <!-- main wrapper -->
    <!-- ============================================================== -->
    <div class="dashboard-main-wrapper">
        <!-- ============================================================== -->
        <!-- navbar -->
        <!-- ============================================================== -->
        <div class="dashboard-header">
            <nav class="navbar navbar-expand-lg bg-white fixed-top">
                <a class="navbar-brand" href="index.php">AEC</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </nav>
        </div>
        <!-- ============================================================== -->
        <!-- end navbar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- left sidebar -->
        <!-- ============================================================== -->
        <div class="nav-left-sidebar sidebar-dark">
            <div class="menu-list">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="d-xl-none d-lg-none" href="#">Dashboard</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav flex-column">
                            <li class="nav-divider">
                                Main
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link active" href="index.php"><i class="fa fa-fw fa-sticky-note"></i>Summary</a>
                            </li>
                            <li class="nav-divider">
                                Ashesi Venture Incubator
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="AVI/business hybrid.php"><i class="fab fa-black-tie"></i>Businesses</a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="AVI/fellows.php"><i class="fab fa-black-tie"></i>Fellows</a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="AVI/modules.php"><i class="fa fa-fw fa-puzzle-piece"></i>Modules</a>
                            </li>
                            <li class="nav-divider">
                                Design Lab
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-3" aria-controls="submenu-3"><i class="fa fa-fw fa-clipboard"></i>Projects</a>
                                <div id="submenu-3" class="collapse submenu" >
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                        <li class="nav-item">
                                            <a class="nav-link" href="D-Lab/projects overview.php">Overview</a>
                                        </li>
                                        <a class="nav-link" href="D-Lab/projects students.php">Student projects</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="D-Lab/projects fellows.php.php">Fellow projects</a>
                            </li>
                        </ul>
                    </div>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="D-Lab/events.php"><i class="fa fa-fw fa-calendar-alt"></i>Events</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-4" aria-controls="submenu-4"><i class="far fa-money-bill-alt"></i>Grants</a>
                        <div id="submenu-4" class="collapse submenu">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link" href="D-Lab/grants overview.php">Overview</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="D-Lab/grants internal.php">Internal grants</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="D-Lab/grants external.php">External grants</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-divider">
                        Undergraduate Programs
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="TAC/businesses.php"><i class="fab fa-black-tie"></i>Businesses</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="TAC/community entrepreneurship.php"><i class="fa fa-fw fas fa-handshake"></i>Comm. Entrepreneurship</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-5" aria-controls="submenu-5"><i class="fa fa-fw fas fa-book"></i>Courses</a>
                        <div id="submenu-5" class="collapse submenu">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link" href="TAC/courses.php">Overview</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="TAC/student projects.php">Student projects</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="TAC/clubs.php"><i class="fa fa-fw fas fa-people-carry"></i>Campus Clubs</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="TAC/events.php"><i class="fa fa-fw fa-calendar-alt"></i>Events</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-6" aria-controls="submenu-6"><i class="far fa-money-bill-alt"></i>Grants</a>
                        <div id="submenu-6" class="collapse submenu">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link" href="TAC/grants overview.php">Overview</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="TAC/grants internal.php">Internal grants</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="TAC/grants external.php">External grants</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <br><br><br><br><br><br>
                    </ul>
            </div>
            </nav>
        </div>
    </div>
    <!-- Main page -->
    <div class="dashboard-wrapper">
        <div class="dashboard-ecommerce">
            <div class="container-fluid dashboard-content ">
                <!-- ============================================================== -->
                <!-- pageheader  -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-header">
                            <!-- Title -->
                            <h2 class="pageheader-title">Summary </h2>
                            <!-- Breadcrumb -->
                        </div>
                    </div>
                </div>

                <div class="ecommerce-widget">
                    <!-- Top row cards -->
                    <div class="row">
                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="text-muted">Total Projects</h5>
                                    <div class="metric-value d-inline-block">
                                        <h1 class="mb-1"><?php echo $total_projects ?></h1>
                                    </div>
                                </div>
                                <div>
                                    <!-- Bar chart here -->
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="text-muted">Total Events</h5>
                                    <div class="metric-value d-inline-block">
                                        <h1 class="mb-1"><?php echo $total_events?></h1>
                                    </div>
                                </div>
                                <div>
                                    <!-- Bar chart here -->
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="text-muted">Total Employment Created</h5>
                                    <div class="metric-value d-inline-block">
                                        <h1 class="mb-1"><?php echo $total_employment_created?></h1>
                                    </div>
                                </div>
                                <div>
                                    <!-- Bar chart here -->
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="text-muted">Total businesses established</h5>
                                    <div class="metric-value d-inline-block">
                                        <h1 class="mb-1"><?php  echo $total_businesses?></h1>
                                    </div>
                                </div>
                                <div id="revenue">
                                    <!-- Bar chart here -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-6 col-lg-12 col-md-6 col-sm-12 col-12">
                            <div class="card">
                                <h5 class="card-header">Total Revenue Generated</h5>
                                <div class="card-body" style="margin-bottom: 2.5%;">
                                   <div id="graph_1" width="220" height="155" >
                                        <!-- Pie chart here -->
                                    </div>
                                    <div class="chart-widget-list" style="margin-top: 83%;">
                                        <p>
                                            <span class="fa-xs text-primary mr-1 legend-title"><i class="fa fa-fw fa-square-full"></i></span><span class="legend-text"> Ashesi Venture Incubator</span>
                                            <span class="float-right">$<?php echo total_business_revenue_for_a_department(AVI)['amount']?></span>
                                        </p>
                                        <p>
                                            <span class="fa-xs text-brand mr-1 legend-title"><i class="fa fa-fw fa-square-full"></i></span> <span class="legend-text">Undergraduate Programs</span>
                                            <span class="float-right">$<?php echo total_business_revenue_for_a_department(TAC)['amount']?></span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-12 col-md-6 col-sm-12 col-12">
                            <div class="card">
                                <h5 class="card-header">Total Grants</h5>
                                <div class="card-body">
                                    <div id="graph_2" width="220" height="155" style="margin-bottom: 2.5%;">
                                        <!-- Pie chart here -->
                                    </div>
                                    <div class="chart-widget-list" style="margin-top: 80%;">
                                        <p>
                                            <span class="fa-xs text-primary mr-1 legend-title"><i class="fa fa-fw fa-square-full"></i></span><span class="legend-text">Ashesi Venture Incubator</span>
                                            <span class="float-right">$<?php echo sum_grant_for_dpt_ctr(AVI)['amount'] ?></span>
                                        </p>
                                        <p>
                                            <span class="fa-xs text-brand mr-1 legend-title"><i class="fa fa-fw fa-square-full"></i></span> <span class="legend-text">Design Lab</span>
                                            <span class="float-right">$<?php echo sum_grant_for_dpt_ctr(D_Lab)['amount'] ?></span>
                                        </p>
                                        <p class="mb-0">
                                            <span class="fa-xs text-info mr-1 legend-title"><i class="fa fa-fw fa-square-full"></i></span> <span class="legend-text">Undergraduate Programs</span>
                                            <span class="float-right">$<?php echo sum_grant_for_dpt_ctr(TAC)['amount'] ?></span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-6 col-lg-12 col-md-6 col-sm-12 col-12">
                            <div class="card">
                                <h5 class="card-header">Events</h5>
                                <div class="card-body" style="margin-bottom: 2.5%;">
                                    <div id="graph_3" width="400" height="150">
                                        <!-- Line graph here -->
                                    </div>
                                </div>
                                <div class="card-body border-top" style="margin-top: 70%;">
                                    <div class="row">
                                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 p-3">
                                            <h2 class="font-weight-normal mb-3"><span><?php echo count_event_for_department_ctr(AVI); ?></span></h2>
                                            <div class="mb-0 mt-3 legend-item">
                                                <span class="fa-xs text-primary mr-1 legend-title "><i class="fa fa-fw fa-square-full"></i></span>
                                                <span class="legend-text">Ashesi Venture Incubator</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 p-3">
                                            <h2 class="font-weight-normal mb-3">
                                                <span><?php echo count_event_for_department_ctr(D_Lab); ?></span>
                                            </h2>
                                            <div class="text-muted mb-0 mt-3 legend-item"> <span class="fa-xs text-secondary mr-1 legend-title">
                                                    <i class="fa fa-fw fa-square-full"></i></span><span class="legend-text">Design Lab</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 p-3">
                                            <h2 class="font-weight-normal mb-3">
                                                <span><?php echo count_event_for_department_ctr(TAC); ?></span>
                                            </h2>
                                            <div class="text-muted mb-0 mt-3 legend-item">
                                                <span class="fa-xs text-success mr-1 legend-title"><i class="fa fa-fw fa-square-full"></i></span>
                                                <span class="legend-text">Undergraduate Programs</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-12 col-md-6 col-sm-12 col-12">
                            <div class="card">
                                <h5 class="card-header">Projects</h5>
                                <div class="card-body"  style="margin-bottom: 2.5%;" >
                                    <div id="graph_4" width="400" height="150" >
                                        <!-- Line graph here -->
                                    </div>
                                </div>
                                <div class="card-body border-top" style="margin-top: 74%;">
                                    <div class="row">
                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 p-3">
                                            <h2 class="font-weight-normal mb-3">
                                                <span><?php echo count_project_under_dpt(D_Lab)['number'] ?></span>
                                            </h2>
                                            <div class="text-muted mb-0 mt-3 legend-item"> <span class="fa-xs text-secondary mr-1 legend-title">
                                                    <i class="fa fa-fw fa-square-full"></i></span><span class="legend-text">Design Lab</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 p-3">
                                            <h2 class="font-weight-normal mb-3">
                                                <span><?php echo count_project_under_dpt(TAC)['number'] ?></span>
                                            </h2>
                                            <div class="text-muted mb-0 mt-3 legend-item">
                                                <span class="fa-xs text-success mr-1 legend-title"><i class="fa fa-fw fa-square-full"></i></span>
                                                <span class="legend-text">Undergraduate Programs</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
    <script src="../javascript/charts.js"></script>
    <script>
        draw("line", "graph_1", "Revenue Generated Per Year", "amount($)", "year(s)", <?php echo $graph_1_data ?>);


        draw("area", "graph_2", "Grant Received Per Year", "amount receieved($)", "year(s)", <?php echo $graph_2_data ?>);

        
        draw("doughnut", "graph_3", "Number Of Event Per Year", "amount receieved($)", "year(s)", <?php echo $graph_3_data ?>);

        draw("pie", "graph_4", "Number Of Project Per Year", "amount receieved($)", "year(s)", <?php echo $graph_4_data ?>);

      </script>
    <script src="assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <!-- bootstap bundle js -->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
    <!-- slimscroll js -->
    <script src="assets/vendor/slimscroll/jquery.slimscroll.js"></script>
    <!-- main js -->
    <script src="assets/libs/js/main-js.js"></script>
    <!-- chart chartist js -->
    <script src="assets/vendor/charts/chartist-bundle/chartist.min.js"></script>
    <!-- sparkline js -->
    <script src="assets/vendor/charts/sparkline/jquery.sparkline.js"></script>
    <!-- morris js -->
    <script src="assets/vendor/charts/morris-bundle/raphael.min.js"></script>
    <script src="assets/vendor/charts/morris-bundle/morris.js"></script>
    <!-- chart c3 js -->
    <script src="assets/vendor/charts/c3charts/c3.min.js"></script>
    <script src="assets/vendor/charts/c3charts/d3-5.4.0.min.js"></script>
    <script src="assets/vendor/charts/c3charts/C3chartjs.js"></script>
    <script src="assets/libs/js/dashboard-ecommerce.js"></script>
    <!-- <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
    <script src="../javascript/charts.js"></script>
    <script>
        // draw("line", "revenue", "", "amount_receieved", "year", <?php // echo $graph_1_data ?>);

        // draw("pie", "graph_2", " Grant Type over the past four(4) years", "total amount($)", "grant type", <?php // echo $graph_2_data ?>);
    </script> -->
</body>

</html>