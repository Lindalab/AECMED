<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AEC - Summary</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/summary.css">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" 
    integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" 
    crossorigin="anonymous" async defer></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" 
    integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" 
    crossorigin="anonymous" async defer></script>
    <script src="./../js/pop.js" async defer></script>
</head>
<body>
    <nav>
        <header class="nav-head pt-4">
            <h1>AEC</h1>
        </header>
        <ul id="list">
            <a href="Summary.php" class="links" id='active'>
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
            <a href="TAC.php" class="links">
                <li class="link">
                    <img class="nav-logo" src="../assets/tac-icon.svg" alt="Teaching Across Curriculum Icon">
                    <p>Teaching Across Curriculum</p>
                </li>
            </a>
        </ul>
    </nav>
    <main id="main">
        <header>
            <h1 class="heading">Summary</h1>
        </header>
        <!-- Summary section -->
        <section id="summary">
            <ul class="main-sum">
                <li class="sum-item">
                    <section class="card">
                        <div class="card-body">
                            <h5 class="card-title d-flex justify-content-between">
                                Total Projects
                                <p class="sum-detail">
                                    55
                                </p>
                            </h5>
                            <ul class="sub-sum">
                                <li class="sub-sum-item" tabindex="0" data-bs-toggle="popover" 
                                data-bs-trigger="hover focus" data-bs-custom-class="custom-popover"
                                data-bs-content="Platform projects: 52 Fellow projects: 25">
                                    Design Lab Projects
                                    <p class="sum-detail">
                                        54
                                    </p>
                                </li>
                                <li class="sub-sum-item" tabindex="1" data-bs-toggle="popover" 
                                data-bs-trigger="hover focus" data-bs-custom-class="custom-popover"
                                data-bs-content="Student projects: 52 Course projects: 25">
                                    Teaching Across Curriculum Projects
                                    <p class="sum-detail">
                                        65
                                    </p>
                                </li>
                            </ul>
                        </div>
                    </section>
                </li>
                <li class="sum-item">
                    <section class="card">
                        <div class="card-body">
                            <h5 class="card-title d-flex justify-content-between">
                                Total Grants
                                <p class="sum-detail">
                                    $108000
                                </p>
                            </h5>
                            <ul class="sub-sum">
                                <li class="sub-sum-item" tabindex="0" data-bs-toggle="popover" 
                                data-bs-trigger="hover focus" data-bs-custom-class="custom-popover"
                                data-bs-content="Internal Grants: $28000 External Grants: $8000">
                                    Ashesi Venture Incubator Grants
                                    <p class="sum-detail">
                                        $36000
                                    </p>
                                </li>
                                <li class="sub-sum-item" tabindex="1" data-bs-toggle="popover" 
                                data-bs-trigger="hover focus" data-bs-custom-class="custom-popover"
                                data-bs-content="Internal Grants: $28000 External Grants: $8000">
                                    Design Lab Grants
                                    <p class="sum-detail">
                                        $36000
                                    </p>
                                </li>
                                <li class="sub-sum-item" tabindex="1" data-bs-toggle="popover" 
                                data-bs-trigger="hover focus" data-bs-custom-class="custom-popover"
                                data-bs-content="Internal Grants: $28000 External Grants: $8000">
                                    Teaching Across Curriculum Grants
                                    <p class="sum-detail">
                                        $36000
                                    </p>
                                </li>
                            </ul>
                        </div>
                    </section>
                </li>
                <li class="sum-item">
                    <section class="card">
                        <div class="card-body">
                            <h5 class="card-title d-flex justify-content-between">
                                Total Events
                                <p class="sum-detail">
                                    55
                                </p>
                            </h5>
                            <ul class="sub-sum">
                                <li class="sub-sum-item">
                                    Ashesi Venture Incubator Events
                                    <p class="sum-detail">
                                        54
                                    </p>
                                </li>
                                <li class="sub-sum-item">
                                    Design Lab Events
                                    <p class="sum-detail">
                                        65
                                    </p>
                                </li>
                                <li class="sub-sum-item">
                                    Teaching Across Curriculum Events
                                    <p class="sum-detail">
                                        65
                                    </p>
                                </li>
                            </ul>
                        </div>
                    </section>
                </li>
            </ul>
            <ul class="main-sum">
                <li class="sum-item">
                    <section class="card">
                        <div class="card-body">
                            <h5 class="card-title d-flex justify-content-between">
                                Total Business Revenue
                                <p class="sum-detail">
                                    $28000
                                </p>
                            </h5>
                            <ul class="sub-sum">
                                <li class="sub-sum-item">
                                    Ashesi Venture Incubator Business Revenue
                                    <p class="sum-detail">
                                        $20000
                                    </p>
                                </li>
                                <li class="sub-sum-item">
                                    Teaching Across Curriculum Business Revenue
                                    <p class="sum-detail">
                                        $8000
                                    </p>
                                </li>
                            </ul>
                        </div>
                    </section>
                </li>
                <li class="sum-item">
                    <section class="card">
                        <div class="card-body">
                            <h5 class="card-title d-flex justify-content-between">
                                Total Employment Created
                                <p class="sum-detail">
                                    500
                                </p>
                            </h5>
                            <ul class="sub-sum">
                                <li class="sub-sum-item">
                                    Ashesi Venture Incubator Employment Created
                                    <p class="sum-detail">
                                        400
                                    </p>
                                </li>
                                <li class="sub-sum-item">
                                    Teaching Across Curriculum Employment Created
                                    <p class="sum-detail">
                                        100
                                    </p>
                                </li>
                            </ul>
                        </div>
                    </section>
                </li>
                <li class="sum-item">
                    <section class="card">
                        <div class="card-body">
                            <h5 class="card-title d-flex justify-content-between">
                                Total Businesses Established
                                <p class="sum-detail">
                                    150
                                </p>
                            </h5>
                            <ul class="sub-sum">
                                <li class="sub-sum-item">
                                    Ashesi Venture Incubator Businesses Established
                                    <p class="sum-detail">
                                        125
                                    </p>
                                </li>
                                <li class="sub-sum-item">
                                    Teaching Across Curriculum Businesses Established
                                    <p class="sum-detail">
                                        25
                                    </p>
                                </li>
                            </ul>
                        </div>
                    </section>
                </li>
            </ul>
        </section>
    </main>
</body>
</html>