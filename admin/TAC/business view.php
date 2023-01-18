<?php
require_once dirname(__FILE__) . "/../../admin_functions/business_functions.php";
require_once dirname(__FILE__) . "/../../functions/dropdowns.php";

$business_id = $_GET['business_id'];

$business = select_one_business_ctr($business_id);
$name = $business['busines_name'];
$email = $business['business_email'];
$contact = $business['business_contact'];
$sector = $business['sector'];
$description = $business['business_description'];
$business_logo = $business['business_logo'];
$formalised_structure = $business['formalised_structure'];
$sdg_alignment = $business['sdg_alignment'];
$location = $business['business_location'];
$department = $business['department_id'];


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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css" integrity="sha384-b6lVK+yci+bfDmaY1u0zE8YYJt0TZxLEAFyYSLHId4xoVvsrQu3INevFKo+Xir8e" crossorigin="anonymous">
    
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="../../javascript/delete.js"></script>
    <script src="../../javascript/alerts.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>


    <title>AEC - Undergraduate Programs Business</title>
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
                                <a class="nav-link" href="../index.php"><i class="fa fa-fw fa-sticky-note"></i>Summary</a>
                            </li>
                            <li class="nav-divider">
                                Ashesi Venture Incubator
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="../AVI/business hybrid.php"><i class="fab fa-black-tie"></i>Businesses</a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="../AVI/fellows.php"><i class="fab fa-black-tie"></i>Fellows</a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="../AVI/modules.php"><i class="fa fa-fw fa-puzzle-piece"></i>Modules</a>
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
                        <a class="nav-link active" href="businesses.php"><i class="fab fa-black-tie"></i>Businesses</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="community entrepreneurship.php"><i class="fa fa-fw fas fa-handshake"></i>Comm. Entrepreneurship</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-5" aria-controls="submenu-5"><i class="fa fa-fw fas fa-book"></i>Courses</a>
                        <div id="submenu-5" class="collapse submenu" style="">
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
                        <a class="nav-link" href="clubs.php"><i class="fa fa-fw fas fa-people-carry"></i>Campus
                            Clubs</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="events.php"><i class="fa fa-fw fa-calendar-alt"></i>Events</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-6" aria-controls="submenu-6"><i class="far fa-money-bill-alt"></i>Grants</a>
                        <div id="submenu-6" class="collapse submenu" style="">
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
                            <h5>Businesses</h5>
                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="businesses.php" class="breadcrumb-link">Businesses</a></li>
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
                                    <div class="view-sec text-start">
                                        <h4>Business Logo</h4>
                                        <figure class='img-frame'>
                                            <img class='img-view' src="../<?php echo $business_logo ?>" alt="business_logo" width="20%" height="20%">
                                        </figure>
                                    </div><br>
                                    <div class="view-sec text-center">

                                        <h4>
                                            Business Owners
                                            <button type="button" class="btn btn-outline-primary float-right" data-toggle="modal" data-target=".bd-example-modal-lg">Add Business Owner</button>

                                        </h4>

                                        <section class="d-flex justify-content-around">
                                            <?php list_business_onwers($business_id) ?>

                                        </section>
                                    </div><br>
                                    <h5>Business Email:</h5>
                                    <p><?php echo $email ?></p>
                                    <h5>Business Contact: </h5>
                                    <p><?php echo $contact ?></p>
                                    <h5>Business Location:</h5>
                                    <p><?php echo $location ?></p>
                                    <h5>Business Sector: </h5>
                                    <p><?php echo $sector ?></p>
                                    <h5>Business Formalised structure: </h5>
                                    <p> <?php echo $formalised_structure; ?> </p>
                                    <h5>SDG Goals: </h5>
                                    <p><?php echo $sdg_alignment; ?></p>
                                    <br>
                                    <h5>
                                        Business Description
                                    </h5>
                                    <p>
                                        <?php echo $description; ?>
                                    </p>
                                    <br>
                                    <h5>
                                        Business Revenue
                                        <button class="btn btn-outline-primary" data-toggle="modal" data-target="#exampleModalCenter">Add Revenue +</button>
                                    </h5>
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead class="bg-light">
                                                <tr class="border-0">
                                                    <th class="border-0">Year</th>
                                                    <th class="border-0">Revenue</th>
                                                    <th class="border-0">Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php display_business_revenue($business_id); ?>

                                            </tbody>
                                        </table>
                                    </div> <br>
                                    <h5>
                                        Business Grants
                                        <button class="btn btn-outline-primary" data-toggle="modal" data-target="#business_grant">Add Grant +</button>
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
    <!-- Modal For Adding Revenue -->

    <!-- Modal -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Add Business Revenue</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="../../actions/insertions/add_business_revenue.php" method="post">
                        <input type="hidden" name="business_id" value="<?php echo $business_id ?>">
                        <input type="hidden" name="department" value="<?php echo $department ?>">
                        <div class="form-group row">
                            <label class="col-12 col-sm-3 col-form-label text-sm-right">Business name</label>
                            <div class="col-12 col-sm-8 col-lg-6">
                                <input type="text" value="<?php echo $name ?>" name="business_name" placeholder="Business Name" readonly required class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-12 col-sm-3 col-form-label text-sm-right">Revenue Amount</label>
                            <div class="col-12 col-sm-8 col-lg-6">
                                <input type="number" name="amount" placeholder="Amount" class="form-control" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-12 col-sm-3 col-form-label text-sm-right">Business year</label>
                            <div class="col-12 col-sm-8 col-lg-6">
                                <input type="number" value="<?php echo date("Y") ?>" required name="year" placeholder="Business Year" class="form-control">
                            </div>
                        </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Add Revenue</button>
                </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Business Grant -->
    <!-- Modal -->
    <div class="modal fade" id="business_grant" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Add Business Grant</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="../../actions/insertions/add_business_grant.php" method="post">
                        <input type="hidden" name="business_id" value="<?php echo $business_id ?>">
                        <input type="hidden" name="department" value="<?php echo $department ?>">
                        <div class="form-group row">
                            <label class="col-12 col-sm-3 col-form-label text-sm-right">Business name</label>
                            <div class="col-12 col-sm-8 col-lg-6">
                                <input type="text" value="<?php echo $name ?>" name="business_name" placeholder="Business Name" readonly required class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-12 col-sm-3 col-form-label text-sm-right">Grants</label>
                            <div class="col-12 col-sm-8 col-lg-6">
                                <select name="grant_id" id="" class="form-control">
                                    <?php department_grant_dropdown(TAC) ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-12 col-sm-3 col-form-label text-sm-right">Amount</label>
                            <div class="col-12 col-sm-8 col-lg-6">
                                <input type="number" name="amount" placeholder="Amount" class="form-control" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-12 col-sm-3 col-form-label text-sm-right">Date</label>
                            <div class="col-12 col-sm-8 col-lg-6">
                                <input type="date" value="" required name="date" placeholder="Business Year" class="form-control">
                            </div>
                        </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Give Grant</button>
                </div>
                </form>
            </div>
        </div>
    </div>


    <!-- Business Grant  -->
    <!-- Modal -->
    <div class="modal fade" id="edit_business_grant" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Edit Business Grant</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="../../actions/insertions/add_business_grant.php" method="post">
                        <input type="hidden" name="business_id" value="<?php echo $business_id ?>">
                        <input type="hidden" name="department" value="<?php echo $department ?>">
                        <div class="form-group row">
                            <label class="col-12 col-sm-3 col-form-label text-sm-right">Business name</label>
                            <div class="col-12 col-sm-8 col-lg-6">
                                <input type="text" value="<?php echo $name ?>" name="business_name" placeholder="Business Name" readonly required class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-12 col-sm-3 col-form-label text-sm-right">Grants</label>
                            <div class="col-12 col-sm-8 col-lg-6">
                                <select name="grant_id" id="" class="form-control">
                                    <?php department_grant_dropdown(TAC) ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-12 col-sm-3 col-form-label text-sm-right">Amount</label>
                            <div class="col-12 col-sm-8 col-lg-6">
                                <input type="number" name="amount" placeholder="Amount" class="form-control" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-12 col-sm-3 col-form-label text-sm-right">Date</label>
                            <div class="col-12 col-sm-8 col-lg-6">
                                <input type="date" value="" required name="date" placeholder="Business Year" class="form-control">
                            </div>
                        </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Give Grant</button>
                </div>
                </form>
            </div>
        </div>
    </div>


    <!-- Business Modal Owner -->
    <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title" id="exampleModalLabel">Add A Business Owner</h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="validationform" data-parsley-validate="" novalidate="" action="../../actions/insertions/add_business_owner.php" method="POST" enctype="multipart/form-data">
                        <div class="form-group row">
                            <label class="col-12 col-sm-3 col-form-label text-sm-right">Stakeholder Name</label>
                            <div class="col-sm-4 col-lg-3 mb-3 mb-sm-0">
                                <input id="name" type="text" required="" placeholder="First Name" name="fname" class="form-control">
                            </div>
                            <div class="col-sm-4 col-lg-3">
                                <input type="text" required="" placeholder="Last Name" name="lname" class="form-control">
                            </div>
                            <input type="hidden" placeholder="" value="<?php echo $department ?>" name="department" class="form-control">
                            <input type="hidden" placeholder="" value="<?php echo $business_id ?>" name="business_id" class="form-control">

                        </div>
                        <div class="form-group row">
                            <label class="col-12 col-sm-3 col-form-label text-sm-right">Stakeholder role</label>
                            <div class="col-12 col-sm-8 col-lg-6">
                                <select name="role" id="" class="form-control">
                                    <option value="<?php echo STUDENT ?>">Student</option>
                                    <option value="<?php echo ALUMNI ?>">Alumni</option>
                                    <option value="<?php echo LECTURER ?>">Lecturer</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-12 col-sm-3 col-form-label text-sm-right">Stakeholder gender</label>
                            <div class="col-12 col-sm-8 col-lg-6">
                                <select name="gender" id="" class="form-control">
                                    <option value="<?php echo  MALE ?>">Male</option>
                                    <option value="<?php echo FEMALE ?>">Female</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-12 col-sm-3 col-form-label text-sm-right">Stakeholder E-Mail</label>
                            <div class="col-12 col-sm-8 col-lg-6">
                                <input type="email" required="" data-parsley-type="email" name="email" placeholder="Enter a valid e-mail" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-12 col-sm-3 col-form-label text-sm-right">Stakeholder Contact</label>
                            <div class="col-12 col-sm-8 col-lg-6">
                                <input data-parsley-type="number" type="number" required="" name="phone_number" placeholder="Enter only numbers" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-12 col-sm-3 col-form-label text-sm-right">Stakeholder Image</label>
                            <div class="col-12 col-sm-8 col-lg-6">
                                <input name="stakeholder_image" type="file" accept="image/*">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <div class="form-group center">
                                <div class="col col-sm-10 col-lg-9 offset-sm-1 offset-lg-0">
                                    <!-- <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button> -->
                                    <button type="submit" class="btn btn-space btn-primary">Submit</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <script>
        function edit_business_revenue(old_year, old_amount) {
            old_year = parseInt(old_year);
            Swal.fire({
                title: 'Edit Revenue Generated',
                html: `
                 <form action='../../actions/updates/update_business_revenue.php' method='POST'>
                       <input type="hidden" name="business_id" value="<?php echo $business_id ?>">
                       <input type="hidden" name="department" value="<?php echo $department ?>">
            
                        <input type="hidden" id="old_amount" name="old_amount" value="${old_amount}">
                        <input type="hidden" id="old_date" name="old_year" value="${old_year}">

                        <div class="form-group row">
                            <label class="col-12 col-sm-3 col-form-label text-sm-right">Businesss Name</label>
                            <div class="col-12 col-sm-8 col-lg-6">
                                <input type="text" value="<?php echo $name ?>" name="" placeholder="Grant Name" readonly required class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-12 col-sm-3 col-form-label text-sm-right">Amount $</label>
                            <div class="col-12 col-sm-8 col-lg-6">
                                <input type="number" value="${old_amount}" id="new_amount" name="new_amount" placeholder="Amount $" required class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-12 col-sm-3 col-form-label text-sm-right">Year</label>
                            <div class="col-12 col-sm-8 col-lg-6">
                                <input type="number" value="${old_year}" id="new_date" name="new_year" placeholder="Date" required class="form-control">
                            </div>
                        </div>
                   
                
                    <button type="submit" class="btn btn-primary">Update Revenue</button>
               
                </form>
                        `,

                focusConfirm: false,
                showConfirmButton: false,
                showCloseButton: true,

            })
        }


        function edit(grant_name, old_amount, old_date, grant_id) {
            Swal.fire({
                title: 'Update Grant Given',
                html: `
                 <form action='../../actions/updates/update_business_grant.php' method='POST'>
                       <input type="hidden" name="business_id" value="<?php echo $business_id ?>">
                       <input type="hidden" name="department" value="<?php echo $department ?>">
            
                        <input type="hidden" id="old_amount" name="old_amount" value="${old_amount}">
                        <input type="hidden" id="old_date" name="old_date" value="${old_date}">
                        <input type="hidden" id="new_grant_id" name="new_grant_id" value="${grant_id}">
                        <input type="hidden" id="old_grant_id" name="old_grant_id" value="${grant_id}">
                        <div class="form-group row">
                            <label class="col-12 col-sm-3 col-form-label text-sm-right">Grant Name</label>
                            <div class="col-12 col-sm-8 col-lg-6">
                                <input type="text" value="${grant_name}" name="" placeholder="Grant Name" readonly required class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-12 col-sm-3 col-form-label text-sm-right">Amount $</label>
                            <div class="col-12 col-sm-8 col-lg-6">
                                <input type="number" value="${old_amount}" id="new_amount" name="new_amount" placeholder="Amount $" required class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-12 col-sm-3 col-form-label text-sm-right">Business name</label>
                            <div class="col-12 col-sm-8 col-lg-6">
                                <input type="date" value="${old_date}" id="new_date" name="new_date" placeholder="Date" required class="form-control">
                            </div>
                        </div>
                   
                
                    <button type="submit" class="btn btn-primary">Give Grant</button>
               
                </form>
                        
                        `,

                focusConfirm: false,
                showConfirmButton: false,
                showCloseButton: true,

            })
        }
    </script>
    <?php if (isset($_GET['message'])) : ?>

        <div class='alert' style="display: none;" aria-hidden="true" data-id="<?php echo $_GET['message']; ?>"></div>

    <?php endif; ?>
    <script>
        sweetAlert("Revenue Added Successfully", "Update Successfully");
    </script>


    <?php 
        modal_business_stakeholder($department, $business_id)
    ?>
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