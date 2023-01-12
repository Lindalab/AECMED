<?php 
    require_once dirname(__FILE__)."/../../admin_functions/project_functions.php";
    require_once dirname(__FILE__)."/../../functions/dropdowns.php";

    $project_id = $_GET['project_id'];
    $project = select_one_project_ctr($project_id);
    $project_name = $project['project_name'];
    $project_description = $project['project_description'];
    $project_status = $project['project_status'];
    $date_started = $project['date_started'];
    $sdg_goals = $project['sdg_goals'];
    $sector = $project['sector'];
    $department = $project['department_id'];

?>

<!doctype html>
<html lang="en">


<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Edit a project</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../../admin/assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="../../admin/assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="../../admin/assets/libs/css/style.css">
    <link rel="stylesheet" href="../../admin/assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
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
                <a class="navbar-brand" href="../index.html">Concept</a>
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
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav flex-column">
                            <li class="nav-divider">
                                Main
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link active" href="../../admin/index.php"><i class="fa fa-fw fa-user-circle"></i>Summary</a>
                            </li>
                            <li class="nav-divider">
                                Ashesi Venture Incubator
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="../../admin/AVI/business hybrid.php"><i class="fa fa-fw fa-user-circle"></i>Businesses</a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="../../admin/AVI/fellows.php"><i class="fa fa-fw fa-user-circle"></i>Fellows</a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="../../admin/AVI/modules.php"><i class="fa fa-fw fa-user-circle"></i>Modules</a>
                            </li>
                            <li class="nav-divider">
                                Design Lab
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-3" aria-controls="submenu-3"><i class="fa fa-fw fa-rocket"></i>Projects</a>
                                <div id="submenu-3" class="collapse submenu" >
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                        <li class="nav-item">
                                            <a class="nav-link" href="../../admin/D-Lab/projects overview.php">Overview</a>
                                        </li>
                                        <a class="nav-link" href="../../admin/D-Lab/projects students.php">Student projects</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="../../admin/D-Lab/projects fellows.php.php">Fellow projects</a>
                            </li>
                        </ul>
                    </div>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="../../admin/D-Lab/events.php"><i class="fa fa-fw fa-user-circle"></i>Events</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-4" aria-controls="submenu-4"><i class="fa fa-fw fa-rocket"></i>Grants</a>
                        <div id="submenu-4" class="collapse submenu">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link" href="../../admin/D-Lab/grants overview.php">Overview</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="../../admin/D-Lab/grants internal.php">Internal grants</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="../../admin/D-Lab/grants external.php">External grants</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-divider">
                        Undergraduate Programs
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="../../admin/TAC/businesses.php"><i class="fa fa-fw fa-user-circle"></i>Businesses</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="../../admin/TAC/community entrepreneurship.php"><i class="fa fa-fw fa-user-circle"></i>Comm. Entrepreneurship</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-5" aria-controls="submenu-5"><i class="fa fa-fw fa-rocket"></i>Courses</a>
                        <div id="submenu-5" class="collapse submenu">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link" href="../../admin/TAC/courses.php">Overview</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="../../admin/TAC/student projects.php">Student projects</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="../../admin/TAC/clubs.php"><i class="fa fa-fw fa-user-circle"></i>Campus Clubs</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="../../admin/TAC/events.php"><i class="fa fa-fw fa-user-circle"></i>Events</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-6" aria-controls="submenu-6"><i class="fa fa-fw fa-rocket"></i>Grants</a>
                        <div id="submenu-6" class="collapse submenu">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link" href="../../admin/TAC/grants overview.php">Overview</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="../../admin/TAC/grants internal.php">Internal grants</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="../../admin/TAC/grants external.php">External grants</a>
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
        <!-- ============================================================== -->
        <!-- end left sidebar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- wrapper  -->
        <!-- ============================================================== -->
        <div class="dashboard-wrapper">
            <div class="container-fluid  dashboard-content">
                <!-- ============================================================== -->
                <!-- pageheader -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-header">
                            <h2 class="pageheader-title">Edit a project </h2>
                            <!-- <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Forms</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Form Validations</li>
                                    </ol>
                                </nav>
                            </div> -->
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- end pageheader -->
                <!-- ============================================================== -->

                <div class="row">
                    <!-- ============================================================== -->
                    <!-- valifation types -->
                    <!-- ============================================================== -->
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="card">
                            <h5 class="card-header">Edit a project</h5>
                            <div class="card-body">
                                <form id="validationform" data-parsley-validate="" novalidate="" action="../../actions/updates/update_project.php" method="POST">
                                <input type="hidden" required="" name="project_id" placeholder="Project Name" class="form-control">
                                    <div class="form-group row">
                                        <label class="col-12 col-sm-3 col-form-label text-sm-right">Project Name</label>
                                        <div class="col-12 col-sm-8 col-lg-6">
                                            <input type="text" name="project_name" value="<?php echo $project_name ?>" required="" placeholder="Project Name"
                                                class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-12 col-sm-3 col-form-label text-sm-right">Project Department</label>
                                        <div class="col-12 col-sm-8 col-lg-6">
                                            <select name="department" id="" class="form-control">
                                                <?php show_department_selected_dropdown($department)?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-12 col-sm-3 col-form-label text-sm-right">Status</label>
                                        <div class="col-12 col-sm-8 col-lg-6">
                                            <select name="status" id="" class="form-control">
                                                <?php project_status_dropdown($project_status) ?>
                                                
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-12 col-sm-3 col-form-label text-sm-right">SDG Goals</label>
                                        <div class="custom-controls-stacked">
                                            <div class="row">
                                            <?php display_checkbox($sdg_goals, "SDG") ?>
                                                <!-- <div class="col">
                                                    <label class="custom-control custom-checkbox">
                                                        <input id="sdg_goals[]" name="sdg_goals[]" type="checkbox" data-parsley-multiple="groups" value="1" data-parsley-mincheck="2" data-parsley-errors-container="#error-container1" class="custom-control-input"><span class="custom-control-label">SDG 1</span>
                                                    </label>
                                                    <label class="custom-control custom-checkbox">
                                                        <input id="sdg_goals[]" name="sdg_goals[]" type="checkbox" data-parsley-multiple="groups" value="2" data-parsley-mincheck="2" data-parsley-errors-container="#error-container1" class="custom-control-input"><span class="custom-control-label">SDG 2</span>
                                                    </label>
                                                    <label class="custom-control custom-checkbox">
                                                        <input id="ck3" name="sdg_goals[]" type="checkbox" data-parsley-multiple="groups" value="3" data-parsley-mincheck="2" required="" data-parsley-errors-container="#error-container1" class="custom-control-input"><span class="custom-control-label">SDG 3</span>
                                                    </label>
                                                    <label class="custom-control custom-checkbox">
                                                        <input id="sdg_goals[]" name="sdg_goals[]" type="checkbox" data-parsley-multiple="groups" value="4" data-parsley-mincheck="2" data-parsley-errors-container="#error-container1" class="custom-control-input"><span class="custom-control-label">SDG 4</span>
                                                    </label>
                                                    <label class="custom-control custom-checkbox">
                                                        <input id="sdg_goals[]" name="sdg_goals[]" type="checkbox" data-parsley-multiple="groups" value="5" data-parsley-mincheck="2" data-parsley-errors-container="#error-container1" class="custom-control-input"><span class="custom-control-label">SDG 5</span>
                                                    </label>
                                                    <label class="custom-control custom-checkbox">
                                                        <input id="sdg_goals[]" name="sdg_goals[]" type="checkbox" data-parsley-multiple="groups" value="6" data-parsley-mincheck="2" required="" data-parsley-errors-container="#error-container1" class="custom-control-input"><span class="custom-control-label">SDG 6</span>
                                                    </label>
                                                </div>
                                                <div class="col">
                                                    <label class="custom-control custom-checkbox">
                                                        <input id="sdg_goals[]" name="sdg_goals[]" type="checkbox" data-parsley-multiple="groups" value="7" data-parsley-mincheck="2" data-parsley-errors-container="#error-container1" class="custom-control-input"><span class="custom-control-label">SDG 7</span>
                                                    </label>
                                                    <label class="custom-control custom-checkbox">
                                                        <input id="sdg_goals[]" name="sdg_goals[]" type="checkbox" data-parsley-multiple="groups" value="8" data-parsley-mincheck="2" data-parsley-errors-container="#error-container1" class="custom-control-input"><span class="custom-control-label">SDG 8</span>
                                                    </label>
                                                    <label class="custom-control custom-checkbox">
                                                        <input id="sdg_goals[]" name="sdg_goals[]" type="checkbox" data-parsley-multiple="groups" value="9" data-parsley-mincheck="2" required="" data-parsley-errors-container="#error-container1" class="custom-control-input"><span class="custom-control-label">SDG 9</span>
                                                    </label>
                                                    <label class="custom-control custom-checkbox">
                                                        <input id="sdg_goals[]" name="sdg_goals[]" type="checkbox" data-parsley-multiple="groups" value="10" data-parsley-mincheck="2" data-parsley-errors-container="#error-container1" class="custom-control-input"><span class="custom-control-label">SDG 10</span>
                                                    </label>
                                                    <label class="custom-control custom-checkbox">
                                                        <input id="sdg_goals[]" name="sdg_goals[]" type="checkbox" data-parsley-multiple="groups" value="11" data-parsley-mincheck="2" data-parsley-errors-container="#error-container1" class="custom-control-input"><span class="custom-control-label">SDG 11</span>
                                                    </label>
                                                    <label class="custom-control custom-checkbox">
                                                        <input id="sdg_goals[]" name="sdg_goals[]" type="checkbox" data-parsley-multiple="groups" value="12" data-parsley-mincheck="2" required="" data-parsley-errors-container="#error-container1" class="custom-control-input"><span class="custom-control-label">SDG 12</span>
                                                    </label>
                                                </div> -->
                                            </div>
                                            <div id="error-container1"></div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-12 col-sm-3 col-form-label text-sm-right">Project Sector</label>
                                        <div class="col-12 col-sm-8 col-lg-6">
                                            <input type="text" name="sector" value="<?php echo $sector ?>" required="" placeholder="Project sector"
                                                class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-12 col-sm-3 col-form-label text-sm-right">Date started</label>
                                        <div class="col-12 col-sm-8 col-lg-6">
                                            <input type="date" required="" name="date_started" value="<?php echo $date_started ?>" placeholder="Date started"
                                                class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-12 col-sm-3 col-form-label text-sm-right">Project Description</label>
                                        <div class="col-12 col-sm-8 col-lg-6">
                                            <textarea required="" name="description" class="form-control"><?php echo $project_description ?></textarea>
                                        </div>
                                    </div>
                                    <!-- <div class="form-group row">
                                        <label class="col-12 col-sm-3 col-form-label text-sm-right">Project Image</label>
                                        <div class="col-12 col-sm-8 col-lg-6">
                                            <input type="file" accept="image/*">
                                        </div>
                                    </div> -->
                                    <div class="form-group row text-right">
                                        <div class="col col-sm-10 col-lg-9 offset-sm-1 offset-lg-0">
                                            <button type="submit" class="btn btn-space btn-primary">Submit</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- end valifation types -->
                    <!-- ============================================================== -->
                </div>

            </div>
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <div class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                            Copyright © 2018 Concept. All rights reserved. Dashboard by <a
                                href="https://colorlib.com/wp/">Colorlib</a>.
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                            <div class="text-md-right footer-links d-none d-sm-block">
                                <a href="javascript: void(0);">About</a>
                                <a href="javascript: void(0);">Support</a>
                                <a href="javascript: void(0);">Contact Us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- end footer -->
            <!-- ============================================================== -->
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- end main wrapper -->
    <!-- ============================================================== -->
    <!-- Optional JavaScript -->
    <script src="../../admin/assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <script src="../../admin/assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
    <script src="../../admin/assets/vendor/slimscroll/jquery.slimscroll.js"></script>
    <script src="../../admin/assets/vendor/parsley/parsley.js"></script>
    <script src="../../admin/assets/libs/js/main-js.js"></script>
    <script>
        $('#form').parsley();
    </script>
    <script>
        // Example starter JavaScript for disabling form submissions if there are invalid fields
        (function () {
            'use strict';
            window.addEventListener('load', function () {
                // Fetch all the forms we want to apply custom Bootstrap validation styles to
                var forms = document.getElementsByClassName('needs-validation');
                // Loop over them and prevent submission
                var validation = Array.prototype.filter.call(forms, function (form) {
                    form.addEventListener('submit', function (event) {
                        if (form.checkValidity() === false) {
                            event.preventDefault();
                            event.stopPropagation();
                        }
                        form.classList.add('was-validated');
                    }, false);
                });
            }, false);
        })();
    </script>
</body>

</html>