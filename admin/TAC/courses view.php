<?php 
    require_once dirname(__FILE__)."/../../admin_functions/course_functions.php";
    require_once dirname(__FILE__)."/../../controllers/general_controller.php";
    require_once dirname(__FILE__)."/../../functions/dropdowns.php";
    
    $course_id = $_GET['course_id'];
    $course = select_one_course_ctr($course_id);
    $course_name = $course['course_name'];
    $course_desc = $course['course_description'];
    $date = $course['date_started'];
    $course_status = $course['status'];
    $department = TAC;
    $student_number = selet_a_course_student_ctr($course_id)['count'];

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
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="../../javascript/delete.js"></script>
    <title>AEC - Undergraudate Programs Courses</title>
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
                <a class="navbar-brand" href="../summary.php">AEC</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
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
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav flex-column">
                            <li class="nav-divider">
                                Main
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="../index.php"><i
                                        class="fa fa-fw fa-sticky-note"></i>Summary</a>
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
                                <div id="submenu-4" class="collapse submenu" style="">
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
                                <div id="submenu-3" class="collapse submenu" style="">
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
                        <div id="submenu-4" class="collapse submenu" style="">
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
                        <a class="nav-link" href="businesses.php"><i
                                class="fab fa-black-tie"></i>Businesses</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="community entrepreneurship.php"><i
                                class="fa fa-fw fas fa-handshake"></i>Comm. Entrepreneurship</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false"
                            data-target="#submenu-5" aria-controls="submenu-5"><i
                                class="fa fa-fw fas fa-book"></i>Courses</a>
                        <div id="submenu-5" class="collapse submenu">
                            <ul class="nav flex-column">
                                <li class="nav-item active">
                                    <a class="nav-link" href="courses.php">Overview</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="student projects.php">Student projects</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="clubs.php"><i class="fa fa-fw fas fa-people-carry"></i>Campus
                            Clubs</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="events.php"><i class="fa fa-fw fa-calendar-alt"></i>Events</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false"
                            data-target="#submenu-6" aria-controls="submenu-6"><i
                                class="far fa-money-bill-alt"></i>Grants</a>
                        <div id="submenu-6" class="collapse submenu">
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
                            <h5>Courses</h5>
                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="courses.php"
                                                class="breadcrumb-link">Courses</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Courses (View)</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="ecommerce-widget">
                    <!-- Top row cards -->
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="card">
                                <div class="card-body">
                                    <h3 class="">Course Name: <?php echo $course_name ?></h3>
                                    <h5>Number of students Taken Course</h5> <p><?php echo $student_number ?></p>
                                    <h5>Status</h5> <p><?php echo course_status($course_status)?></p>
                                    <h5>Date Started</h5> <p><?php echo $date ?></p>
                                    
                                    <h5>
                                        Course Description
                                    </h5>
                                    <p>
                                        <?php echo $course_desc ?>
                                        
                                    </p>
                                    <br>
                                    <h5>
                                            Course Projects 
                                            <button class="btn btn-outline-primary">Add Project +</button>
                                        </h5>
                                            <div class="table-responsive">
                                            <table class="table">
                                                <thead class="bg-light">
                                                    <tr class="border-0">
                                                        <th class="border-0">Project Name</th>
                                                        <th class="border-0">Date Commenced</th>
                                                        <th class="border-0">Grant Received</th>
                                                        <th class="border-0">Project Status</th>
                                                        <th class="border-0">Actions</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                <?php display_course_projects($course_id)?>
                                               
                                                </tbody>
                                            </table>
                                            </div> <br>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
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
    <script src="../assets/libs/js/dashboard-ecommerce.js"></script>
</body>

</html>