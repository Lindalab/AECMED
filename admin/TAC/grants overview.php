<?php 
        require_once dirname(__FILE__)."/../../functions/summary.php";
        require_once dirname(__FILE__)."/../../admin_functions/grant_functions.php";
                
        $graph_1_data = graphing_data_for_years_and_business(TAC);
        $graph_2_data = graphing_data_busines_type(TAC);
        $graph_3_data = count_grant_type(TAC);
?>
<!doctype html>
<html lang="en">
 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="../assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/libs/css/style.css">
    <link rel="stylesheet" href="../assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <link rel="stylesheet" href="../assets/vendor/charts/chartist-bundle/chartist.css">
    <link rel="stylesheet" href="../assets/vendor/charts/morris-bundle/morris.css">
    <link rel="stylesheet" href="../assets/vendor/fonts/material-design-iconic-font/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="../assets/vendor/charts/c3charts/c3.css">
    <link rel="stylesheet" href="../assets/vendor/fonts/flag-icon-css/flag-icon.min.css">
    <title>AEC - Undergraduate Programs Grants</title>
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
                <a class="navbar-brand" href="../index.php">AEC</a>
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
        <div class="nav-left-sidebar sidebar-danger">
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
                                <a class="nav-link" href="../index.php"><i class="fa fa-fw fa-sticky-note"></i>Summary</a>
                            </li>
                            <li class="nav-divider">
                                Ashesi Venture Incubator
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="../AVI/business hybrid.php"><i
                                        class="fab fa-black-tie"></i>Businesses</a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="../AVI/fellows.php"><i
                                        class="fab fa-black-tie"></i>Fellows</a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="../AVI/modules.php"><i
                                        class="fa fa-fw fa-puzzle-piece"></i>Modules</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-4" aria-controls="submenu-4"><i class="far fa-money-bill-alt"></i>Grants</a>
                                <div id="submenu-4" class="collapse submenu-danger">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="../AVI/grants overview.php">Overview</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="../AVI/grants internal.php">Internal grants</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="../AVI/grants external.php">External grants</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-divider">
                                Design Lab
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false"
                                    data-target="#submenu-3" aria-controls="submenu-3"><i
                                        class="fa fa-fw fa-clipboard"></i>Projects</a>
                                <div id="submenu-3" class="collapse submenu-danger">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                        <li class="nav-item">
                                            <a class="nav-link" href="../D-Lab/projects overview.php">Overview</a>
                                        </li>
                                        <a class="nav-link" href="../D-Lab/projects students.php">Student projects</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="../D-Lab/projects fellows.php">Fellow projects</a>
                            </li>
                        </ul>
                    </div>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="../D-Lab/events.php"><i
                                class="fa fa-fw fa-calendar-alt"></i>Events</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false"
                            data-target="#submenu-4" aria-controls="submenu-4"><i
                                class="far fa-money-bill-alt"></i>Grants</a>
                        <div id="submenu-4" class="collapse submenu-danger">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link" href="../D-Lab/grants overview.php">Overview</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="../D-Lab/grants internal.php">Internal grants</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="../D-Lab/grants external.php">External grants</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                            <li class="nav-divider">
                                Undergraduate Programs
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="businesses.php"><i class="fab fa-black-tie"></i>Businesses</a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="community entrepreneurship.php"><i class="fa fa-fw fas fa-handshake"></i>Comm. Entrepreneurship</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-5" aria-controls="submenu-5"><i class="fa fa-fw fas fa-book"></i>Courses</a>
                                <div id="submenu-5" class="collapse submenu-danger">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="courses.php">Overview</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="student projects.php">Student projects</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="clubs.php"><i class="fa fa-fw fas fa-people-carry"></i>Campus Clubs</a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="events.php"><i class="fa fa-fw fa-calendar-alt"></i>Events</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-6" aria-controls="submenu-6"><i class="far fa-money-bill-alt"></i>Grants</a>
                                <div id="submenu-6" class="collapse submenu-danger">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="grants overview.php">Overview</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="grants internal.php">Internal grants</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="grants external.php">External grants</a>
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
                                <h2 class="pageheader-title">Undergraduate Programs</h2>
                                <!-- Breadcrumb -->
                                <h5>Grants Overview</h5>
                            </div>
                        </div>
                    </div>

                    <div class="ecommerce-widget">
                        <!-- Top row cards -->
                        <div class="row">
                            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="text-muted">Total Grants</h5>
                                        <div class="metric-value d-inline-block">
                                            <h1 class="mb-1">$<?php echo  $tac_grants?></h1>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="text-muted">Internal Grants</h5>
                                        <div class="metric-value d-inline-block">
                                            <h1 class="mb-1">$<?php echo grant_department_and_type_ctr(TAC,INTERNAL)['amount'] ?></h1>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="text-muted">External Grants</h5>
                                        <div class="metric-value d-inline-block">
                                            <h1 class="mb-1">$<?php echo grant_department_and_type_ctr(TAC,EXTERNAL)['amount'] ?></h1>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-6 col-lg-12 col-md-6 col-sm-12 col-12">
                                <div class="card">
                                    <h5 class="card-header">Number of grants over the past four years</h5>
                                    <div class="card-body" style="margin-bottom: 70%;">
                                        <div id="graph_3" width="400" height="150">
                                            <!-- Pie graph here -->
                                        </div>
                                    </div>
                                    <div class="card-body border-top">
                                        <!-- <div class="row">
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 p-3">
                                                <h2 class="font-weight-normal mb-3">
                                                    <span>40</span>
                                                </h2>
                                                <div class="mb-0 mt-3 legend-item">
                                                    <span class="fa-xs text-primary mr-1 legend-title "><i class="fa fa-fw fa-square-full"></i></span>
                                                    <span class="legend-text">Internal Grants</span></div>
                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 p-3">
                                                <h2 class="font-weight-normal mb-3">
                                                    <span>45</span>
                                                </h2>
                                                <div class="text-muted mb-0 mt-3 legend-item"> <span class="fa-xs text-secondary mr-1 legend-title">
                                                    <i class="fa fa-fw fa-square-full"></i></span><span class="legend-text">External Grants</span>
                                                </div>
                                            </div>
                                        </div> -->
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-12 col-md-6 col-sm-12 col-12">
                                <div class="card">
                                    <h5 class="card-header">Grants over the past four years</h5>
                                    <div class="card-body" style="margin-bottom: 70%;">
                                        <div id="graph_2" width="400" height="150" >
                                            <!-- Pie graph here -->
                                        </div>
                                    </div>
                                    <div class="card-body border-top">
                                        <!-- <div class="row">
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 p-3">
                                                <h2 class="font-weight-normal mb-3"><span>$12000</span></h2>
                                                <div class="mb-0 mt-3 legend-item">
                                                    <span class="fa-xs text-primary mr-1 legend-title "><i class="fa fa-fw fa-square-full"></i></span>
                                                    <span class="legend-text">Internal Grants</span></div>
                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 p-3">
                                                <h2 class="font-weight-normal mb-3">
                                                    <span>$4500</span>
                                                </h2>
                                                <div class="text-muted mb-0 mt-3 legend-item"> <span class="fa-xs text-secondary mr-1 legend-title">
                                                    <i class="fa fa-fw fa-square-full"></i></span><span class="legend-text">External Grants</span>
                                                </div>
                                            </div> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="card">
                                    <h5 class="card-header">Grants over the past years</h5>
                                    <div class="card-body">
                                        <div id="graph_1" width="400" height="150" style="margin-bottom: 30%;">
                                            <!-- Line graph here -->
                                        </div>
                                    </div>
                                    <div class="card-body border-top">
                                        <!-- <div class="row">
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 p-3">
                                                <h2 class="font-weight-normal mb-3"><span>56</span></h2>
                                                <div class="mb-0 mt-3 legend-item">
                                                    <span class="fa-xs text-primary mr-1 legend-title "><i class="fa fa-fw fa-square-full"></i></span>
                                                    <span class="legend-text">Internal Grants</span></div>
                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 p-3">
                                                <h2 class="font-weight-normal mb-3">
                                                    <span>65</span>
                                                </h2>
                                                <div class="text-muted mb-0 mt-3 legend-item"> <span class="fa-xs text-secondary mr-1 legend-title">
                                                    <i class="fa fa-fw fa-square-full"></i></span><span class="legend-text">External Grants</span>
                                                </div>
                                            </div>
                                        </div> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="card">
                                    <h5 class="card-header">Top three grants</h5>
                                    <div class="card-body p-0">
                                        <div class="table-responsive">
                                            <table class="table">
                                                <thead class="bg-light">
                                                    <tr class="border-0">
                                                        <th class="border-0">Company Name</th>
                                                        <th class="border-0">Grant Received</th>
                                                        <th class="border-0">Grant Type</th>
                                                        <th class="border-0">Date Received</th>
                                                    </tr>
                                                </thead>
                                                <tbody>

                                                <?php display_grants(TAC)?>
                                                    
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="card">
                                    <h5 class="card-header">Top three internal grants</h5>
                                    <div class="card-body p-0">
                                        <div class="table-responsive">
                                            <table class="table">
                                                <thead class="bg-light">
                                                    <tr class="border-0">
                                                        <th class="border-0">Company Name</th>
                                                        <th class="border-0">Grant received</th>
                                                        <th class="border-0">Date Created</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php display_grant_types(TAC, INTERNAL) ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="card">
                                    <h5 class="card-header">Top three external grants</h5>
                                    <div class="card-body p-0">
                                        <div class="table-responsive">
                                            <table class="table">
                                                <thead class="bg-light">
                                                    <tr class="border-0">
                                                        <th class="border-0">Company Name</th>
                                                        <th class="border-0">Grant received</th>
                                                        <th class="border-0">Date Created</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                <?php display_grant_types(TAC, EXTERNAL) ?>
                                                </tbody>
                                            </table>
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
    <script src="../../javascript/charts.js"></script>
    <script>
       draw("line", "graph_1", "Grants received over the past years", "amount_receieved($)", "year(s)", <?php echo $graph_1_data ?>);

       draw("pie", "graph_2", " Grant Type over the past four(4) years", "total amount($)", "grant type", <?php echo $graph_2_data ?>);

       draw("doughnut", "graph_3", " Grant Type over the past four(4) years", "total amount($)", "grant type", <?php echo $graph_3_data ?>);
    </script>
    <script src="../assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <!-- bootstap bundle js -->
    <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
    <!-- slimscroll js -->
    <script src="../assets/vendor/slimscroll/jquery.slimscroll.js"></script>
    <!-- main js -->
    <script src="../assets/libs/js/main-js.js"></script>
    <!-- chart chartist js -->
    <script src="../assets/vendor/charts/chartist-bundle/chartist.min.js"></script>
    <!-- sparkline js -->
    <script src="../assets/vendor/charts/sparkline/jquery.sparkline.js"></script>
    <!-- morris js -->
    <script src="../assets/vendor/charts/morris-bundle/raphael.min.js"></script>
    <script src="../assets/vendor/charts/morris-bundle/morris.js"></script>
    <!-- chart c3 js -->
    <script src="../assets/vendor/charts/c3charts/c3.min.js"></script>
    <script src="../assets/vendor/charts/c3charts/d3-5.4.0.min.js"></script>
    <script src="../assets/vendor/charts/c3charts/C3chartjs.js"></script>
    <script src="../assets/libs/js/dashboard-ecommerce.js"></script></body></html>