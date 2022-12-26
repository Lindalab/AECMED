<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AEC - Ashesi Venture Incubator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="./../css/main.css">
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
            <a href="Summary.php" class="links">
                <li class="link">
                    <img class="nav-logo" src="./../assets/summary-icon.svg" alt="Design Lab Icon">
                    <p>Summary</p>
                </li>
            </a>
            <a href="AVI.php" class="links" id='active'>
                <li class="link">
                    <img class="nav-logo" src="./../assets/avi-icon.svg" alt="Ashesi Venture Incubator Icon">
                    <p>Ashesi Venture Incubator</p>
                </li>
            </a>
            <a href="D-Lab.php" class="links">
                <li class="link">
                    <img class="nav-logo" src="./../assets/dlab-icon.svg" alt="Design Lab Icon">
                    <p>Design Lab</p>
                </li>
            </a>
            <a href="TAC.php" class="links">
                <li class="link">
                    <img class="nav-logo" src="./../assets/tac-icon.svg" alt="Teaching Across Curriculum Icon">
                    <p>Teaching Across Curriculum</p>
                </li>
            </a>
        </ul>
    </nav>
    <main id="main">
        <header>
            <h1 class="heading mb-4">Ashesi Venture Incubator</h1>
            <!-- Card Navigations -->
            <ul id="card-navs">
                <a href="./AVI/AVI businesses.php">
                    <li class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-9">
                                    <h5 class="card-title">Businesses - 41</h5>
                                    <h6 class="card-subtitle mb-2">
                                        <ul>
                                            <li>
                                                Male owned - 23
                                            </li>
                                            <li>
                                                Female owned - 41
                                            </li>
                                        </ul>
                                    </h6>
                                </div>
                                <div class="col-3">
                                    <img class="card-icons" src="../assets/business-icon.svg" alt="Businesses image">
                                </div>
                            </div>
                        </div> 
                    </li>
                </a>
                <a href="./AVI/AVI modules.php">
                    <li class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-9">
                                    <h5 class="card-title">Modules - 21</h5>
                                </div>
                                <div class="col-3">
                                    <img class="card-icons" src="../assets/modules-icon.svg" alt="Modules image">
                                </div>
                            </div>
                        </div> 
                    </li>
                </a>
                <a href="./AVI/AVI fellows.php">
                    <li class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-9">
                                    <h5 class="card-title">Fellows - 1289</h5>
                                </div>
                                <div class="col-3">
                                    <img class="card-icons" src="../assets/fellows-icon.svg" alt="Fellows image">
                                </div>
                            </div>
                        </div> 
                    </li>
                </a>
            </ul>
        </header>
    </main>
</body>
</html>