<?php
require_once dirname(__FILE__) . "/../../functions/summary.php";
require_once dirname(__FILE__) . "/../../functions/dropdowns.php";

require_once dirname(__FILE__) . "/../../admin_functions/business_functions.php";

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
    <script src="../../javascript/alerts.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
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
                                <a class="nav-link active" href="business hybrid.php"><i class="fab fa-black-tie"></i>Businesses</a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="fellows.php"><i class="fab fa-black-tie"></i>Fellows</a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="modules.php"><i class="fa fa-fw fa-puzzle-piece"></i>Modules</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-4" aria-controls="submenu-4"><i class="far fa-money-bill-alt"></i>Grants</a>
                                <div id="submenu-4" class="collapse submenu-danger">
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
                        <a class="nav-link" href="../D-Lab/events.php"><i class="fa fa-fw fa-calendar-alt"></i>Events</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-4" aria-controls="submenu-4"><i class="far fa-money-bill-alt"></i>Grants</a>
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
                        <a class="nav-link" href="../TAC/businesses.php"><i class="fab fa-black-tie"></i>Businesses</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="../TAC/community entrepreneurship.php"><i class="fa fa-fw fas fa-handshake"></i>Comm. Entrepreneurship</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-5" aria-controls="submenu-5"><i class="fa fa-fw fas fa-book"></i>Courses</a>
                        <div id="submenu-5" class="collapse submenu-danger">
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
                        <div id="submenu-6" class="collapse submenu-danger">
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
                        </div>
                    </div>
                </div>

                <div class="ecommerce-widget">
                    <!-- Top row cards -->
                    <div class="row">
                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="text-muted">Revenue generated</h5>
                                    <div class="metric-value d-inline-block">
                                        <h1 class="mb-1">$<?php echo $avi_business_revenure ?></h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="text-muted">Employment Created</h5>
                                    <div class="metric-value d-inline-block">
                                        <h1 class="mb-1"><?php echo $avi_employment_created ?></h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="text-muted">Grants received</h5>
                                    <div class="metric-value d-inline-block">
                                        <h1 class="mb-1">$<?php echo $avi_business_grant_received ?></h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="card">
                                <div class="d-flex justify-content-between">
                                    <h5 class="card-header">Hybrid businesses</h5>
                                    <a href='../../forms/add/add-business.php?department=<?php echo AVI ?>' class="btn btn-primary">Add business+</a>

                                </div>
                                <div class="card-body p-0">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead class="bg-light">
                                                <tr class="border-0">
                                                    <th class="border-0">Business Name</th>
                                                    <th class="border-0">Employment Created</th>
                                                    <th class="border-0">Revenue generated</th>
                                                    <th class="border-0">Business Sector</th>
                                                    <th class="border-0">Date Created</th>
                                                    <th class="border-0">Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php show_business(AVI); ?>
                                                <!-- <tr>
                                                        <td>Business #1 </td>
                                                        <td>67 </td>
                                                        <td>$80.00</td>
                                                        <td>Cooking</td>
                                                        <td>27-08-2018</td>
                                                        <td>
                                                            <a href="business view.php">
                                                                <button class="btn btn-outline-info">View</button>
                                                            </a>
                                                            <a href="../../forms/edit/edit-business.php">
                                                                <button class="btn btn-outline-warning">Edit</button>
                                                            </a>
                                                            <button class="btn btn-outline-danger">Remove</button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Business #2 </td>
                                                        <td>67 </td>
                                                        <td>$80.00</td>
                                                        <td>Cooking</td>
                                                        <td>27-08-2018</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Business #3 </td>
                                                        <td>67 </td>
                                                        <td>$80.00</td>
                                                        <td>Cooking</td>
                                                        <td>27-08-2018</td>
                                                    </tr> -->
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

    <!-- Add Business -->
    <div id="businessModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="../admin/addproduct.php" method="POST" style="margin:5% 10%;" enctype="multipart/form-data">
                    <div class="modal-header">
                        <h4 class="modal-title" style="color: #051922; font-weight: bolder;">Register Business</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body"></div>
                    <div class="form-outline mb-4">
                        <label class="form-label" for="ptitle" style="color: #051922;font-weight: bold;">Business Name</label>
                        <input type="text" id="ptitle" name="busines_name" class="form-control" required />
                    </div>
                    <div class="form-outline mb-4">
                        <label class="form-label" for="mycat" style="color: #051922;font-weight: bold;">Year started</label>
                        <input type="text" id="ptitle" name="year_started" class="form-control" required />

                    </div>
                    <div class="form-outline mb-4">
                        <label class="form-label" for="pprice" style="color: #051922;font-weight: bold;">Business address</label>
                        <input type="number" name="business_location" id="pprice" class="form-control" placeholder="Price" required />
                    </div>
                    <div class="form-outline mb-4">
                        <label class="form-label" for="pdesc" style="color: #051922;font-weight: bold;">Business Contact</label>
                        <input type="text" name="business_contact" id="pdesc" class="form-control" required />
                    </div>
                    <div class="form-outline mb-4">
                        <label class="form-label" for="pkeyword" style="color: #051922;font-weight: bold;">Business Email</label>
                        <input type="text" name="business_email" id="pkeyword" class="form-control" placeholder="Keyword" />
                    </div>
                    <div class="form-outline mb-4">
                        <label class="form-label" for="pkeyword" style="color: #051922;font-weight: bold;">Business Sector</label>
                        <input type="text" name="sector" id="pkeyword" class="form-control" placeholder="Keyword" />
                    </div>
                    <div class="form-outline mb-4">
                        <label class="form-label" for="department_id" style="color: #051922;font-weight: bold;">Business Department</label>
                        <?php getDepartmentDropdown_fnc(); ?>
                    </div>
                    <div class="form-outline mb-4">
                        <label class="form-label" for="pkeyword" style="color: #051922;font-weight: bold;">Business Description</label>
                        <input type="text" name="department_id" id="pkeyword" class="form-control" placeholder="Keyword" />
                    </div>
                    <div class="form-outline mb-4">
                        <label class="form-label" for="pkeyword" style="color: #051922;font-weight: bold;">Business Status</label>
                        <input type="text" name="business_status" id="pkeyword" class="form-control" placeholder="Keyword" />
                    </div>
                    <div class="form-outline mb-4">
                        <label class="form-label" for="pImage" style="color: #051922;font-weight: bold;">Business Logo</label>
                        <input type="file" name="pImage" id="business_logo" class="form-control" accept="image/*" required />
                    </div>
                    <div class="modal-footer">
                        <input type="button" class="btn btn-default" style="color: #051922;font-weight: bold;" data-dismiss="modal" value="Cancel">
                        <input type="submit" class="btnAdd btn-primary" name="submit" value="Register">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <?php if (isset($_GET['message'])) : ?>

        <div class='alert' style="display: none;" aria-hidden="true" data-id="<?php echo $_GET['message']; ?>"></div>

    <?php endif; ?>
    <script>
        sweetAlert("Business Added Successfully", "Operation Successfully executed");
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
    <script src="../assets/libs/js/dashboard-ecommerce.js"></script>
</body>

</html>