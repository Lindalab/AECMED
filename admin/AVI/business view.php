<?php 
    require_once dirname(__FILE__)."/../../admin_functions/business_functions.php";

    $business_id = $_GET['business_id'];

    $business = select_one_business_ctr($business_id);
    $name = $business['business_name'];
    $email = $business['business_email'];
    $contact = $business['business_contact'];
    $sector = $business['sector'];
    $description = $business['business_description'];
    $business_logo = $business['business_logo'];
    $formalised_structure = $business['formalised_structure'];
    $sdg_alignment = $business['sdg_alignment'];
    $location = $business['business_location'];

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
    <title>AEC - AVI Business</title>
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
                                <a class="nav-link active" href="business hybrid.php"><i
                                        class="fab fa-black-tie"></i>Businesses</a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="fellows.php"><i
                                        class="fab fa-black-tie"></i>Fellows</a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="modules.php"><i
                                        class="fa fa-fw fa-puzzle-piece"></i>Modules</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-4" aria-controls="submenu-4"><i class="far fa-money-bill-alt"></i>Grants</a>
                                <div id="submenu-4" class="collapse submenu" style="">
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
                            <li class="nav-divider">
                                Design Lab
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-3" aria-controls="submenu-3"><i class="fa fa-fw fa-clipboard"></i>Projects</a>
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
                                <a class="nav-link" href="../D-Lab/events.php"><i class="fa fa-fw fa-calendar-alt"></i>Events</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-4" aria-controls="submenu-4"><i class="far fa-money-bill-alt"></i>Grants</a>
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
                                <a class="nav-link" href="../TAC/businesses.php"><i class="fab fa-black-tie"></i>Businesses</a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="../TAC/community entrepreneurship.php"><i class="fa fa-fw fas fa-handshake"></i>Comm. Entrepreneurship</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-5" aria-controls="submenu-5"><i class="fa fa-fw fas fa-book"></i>Courses</a>
                                <div id="submenu-5" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="../TAC/courses.php">Overview</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="../TAC/student projects.php">Student projects</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="../TAC/clubs.php"><i class="fa fa-fw fas fa-people-carry"></i>Campus Clubs</a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="../TAC/events.php"><i class="fa fa-fw fa-calendar-alt"></i>Events</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-6" aria-controls="submenu-6"><i class="far fa-money-bill-alt"></i>Grants</a>
                                <div id="submenu-6" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="../TAC/grants overview.php">Overview</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="../TAC/grants internal.php">Internal grants</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="../TAC/grants external.php">External grants</a>
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
                            <h2 class="pageheader-title">Ashesi Venture Incubator</h2>
                            <!-- Breadcrumb -->
                            <h5>Hybrid businesses</h5>
                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="business hybrid.php"
                                                class="breadcrumb-link">Businesses</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Businesses (View)</li>
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
                                    <h3 class=""><?php echo $name ?></h3>
                                    <div class="view-sec text-center">
                                        <h4>Business Owners</h4>
                                        <section class="d-flex justify-content-around">
                                           <?php list_business_onwers($business_id)?>
                                            <!-- <figure class="img-frame">
                                                <img class="img-view" src="../"
                                                    alt="img name">
                                                <figcaption>
                                                    Gupta Sanchez <br>
                                                    <sub class="text-muted">
                                                        
                                                    </sub>
                                                </figcaption>
                                            </figure>
                                            <figure class="img-frame">
                                                <img class="img-view" src=".."
                                                    alt="img name">
                                                <figcaption>
                                                    Gupta Sanchez <br>
                                                    <sub class="text-muted">
                                                        
                                                    </sub>
                                                </figcaption>
                                            </figure> -->
                                        </section>
                                    </div><br>

                                    <h5>Business Email:</h5> <p><?php echo $email ?></p>
                                    <h5>Business Contact: </h5> <p><?php echo $contact ?></p>
                                    <h5>Business Location:</h5> <p><?php echo $location?></p>
                                    <h5>Business Sector: </h5> <p><?php echo $sector ?></p>
                                    <h5>Business Formalised structure: </h5> <p>  <?php echo $formalised_structure;?>   </p>
                                    <h5>SDG Goals: </h5> <p><?php echo $sdg_alignment; ?></p>
                                    <br>                                   
                                    <h5>
                                        Business Description
                                    </h5>
                                    <p>
                                        <?php echo $description;?>
                                        <!-- <br><br>
                                        Vivamus luctus non ipsum tempor placerat. Cras vitae orci velit. Maecenas sagittis nisl et sapien molestie, eget 
                                        luctus justo hendrerit. Curabitur commodo lectus quam, vitae ullamcorper nibh hendrerit sit amet. Maecenas eget 
                                        mauris justo. Donec at neque maximus diam tempor imperdiet. Ut convallis sollicitudin magna in mattis. Nam blandit 
                                        nisi orci. Cras fermentum arcu erat. Curabitur mollis tellus sit amet felis fermentum dignissim. Nulla facilisi. 
                                        Etiam nec pulvinar mauris, et ultrices ipsum. -->
                                    </p>
                                    <br>
                                    <h5>
                                        Business Revenue 
                                        <button class="btn btn-outline-primary">Add Revenue +</button>
                                    </h5>
                                        <div class="table-responsive">
                                            <table class="table">
                                                <thead class="bg-light">
                                                    <tr class="border-0">
                                                   
                                                        <th class="border-0">Date Created</th>
                                                        <th class="border-0">Revenue generated</th>
                                                        <th class="border-0">Actions</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                <?php display_business_revenue($business_id); ?>
                                                    <!-- <tr>
                                                        <td>$80.00</td>
                                                        <td>27-08-2018</td>
                                                        <td>
                                                            <button class="btn btn-outline-warning">Edit</button>
                                                            <button class="btn btn-outline-danger">Remove</button>
                                                        </td>
                                                    </tr> -->
                                                </tbody>
                                            </table>
                                        </div> <br>
                                        <h5>
                                            Business Grants 
                                            <button class="btn btn-outline-primary">Add Grant +</button>
                                        </h5>
                                            <div class="table-responsive">
                                                <table class="table">
                                                    <thead class="bg-light">
                                                        <tr class="border-0">
                                                            <th class="border-0">Company Name</th>
                                                            <th class="border-0">Grant Received</th>
                                                            <th class="border-0">Date Received</th>
                                                            <th class="border-0">Actions</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                    <?php display_business_grants($business_id) ?>
                                                        <!-- <tr>
                                                            <td>Coco-cola</td>
                                                            <td>$80.00</td>
                                                            <td>27-08-2018</td>
                                                            <td>
                                                                <button class="btn btn-outline-warning">Edit</button>
                                                                <button class="btn btn-outline-danger">Remove</button>
                                                            </td>
                                                        </tr> -->
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