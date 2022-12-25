<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AEC - Design Lab Projects</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<<<<<<<< HEAD:view/D-Lab Subsec.php
    <link rel="stylesheet" href="./css/main.css">
========
    <link rel="stylesheet" href="./../../css/main.css">
>>>>>>>> a0ab27656da31ead928913ebe1eb320439586709:view/D-Lab/D-Lab Subsec.php
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" 
    integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" 
    crossorigin="anonymous" async defer></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" 
    integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" 
    crossorigin="anonymous" async defer></script>
<<<<<<<< HEAD:view/D-Lab Subsec.php
    <script src="./js/pop.js" async defer></script>
========
    <script src="./../../js/pop.js" async defer></script>
>>>>>>>> a0ab27656da31ead928913ebe1eb320439586709:view/D-Lab/D-Lab Subsec.php
</head>
<body>
    <nav>
        <header class="nav-head pt-4">
            <h1>AEC</h1>
        </header>
        <ul id="list">
<<<<<<<< HEAD:view/D-Lab Subsec.php
            <a href="Summary.html" class="links">
                <li class="link">
                    <img class="nav-logo" src="./assets/summary-icon.svg" alt="Design Lab Icon">
                    <p>Summary</p>
                </li>
            </a>
            <a href="AVI.html" class="links">
                <li class="link">
                    <img class="nav-logo" src="./assets/avi-icon.svg" alt="Ashesi Venture Incubator Icon">
                    <p>Ashesi Venture Incubator</p>
                </li>
            </a>
            <a href="D-Lab.html" class="links" id='active'>
                <li class="link">
                    <img class="nav-logo" src="./assets/dlab-icon.svg" alt="Design Lab Icon">
                    <p>Design Lab</p>
                </li>
            </a>
            <a href="TAC.html" class="links">
                <li class="link">
                    <img class="nav-logo" src="./assets/tac-icon.svg" alt="Teaching Across Curriculum Icon">
========
            <a href="../Summary.php" class="links">
                <li class="link">
                    <img class="nav-logo" src="./../../assets/summary-icon.svg" alt="Design Lab Icon">
                    <p>Summary</p>
                </li>
            </a>
            <a href="../AVI.php" class="links">
                <li class="link">
                    <img class="nav-logo" src="./../../assets/avi-icon.svg" alt="Ashesi Venture Incubator Icon">
                    <p>Ashesi Venture Incubator</p>
                </li>
            </a>
            <a href="../D-Lab.php" class="links" id='active'>
                <li class="link">
                    <img class="nav-logo" src="./../../assets/dlab-icon.svg" alt="Design Lab Icon">
                    <p>Design Lab</p>
                </li>
            </a>
            <a href="../TAC.php" class="links">
                <li class="link">
                    <img class="nav-logo" src="./../../assets/tac-icon.svg" alt="Teaching Across Curriculum Icon">
>>>>>>>> a0ab27656da31ead928913ebe1eb320439586709:view/D-Lab/D-Lab Subsec.php
                    <p>Teaching Across Curriculum</p>
                </li>
            </a>
        </ul>
    </nav>
    <main id="main">
        <header>
            <h1 class="heading mb-2">Design Lab</h1>
            <!-- Breadcrumb -->
            <section aria-label="breadcrumb">
                <ol class="breadcrumb">
<<<<<<<< HEAD:view/D-Lab Subsec.php
                  <li class="breadcrumb-item"><a href="D-Lab.html">..</a></li>
                  <li class="breadcrumb-item"><a href="D-Lab Section.html">Projects</a></li>
========
                  <li class="breadcrumb-item"><a href="../D-Lab.php">..</a></li>
                  <li class="breadcrumb-item"><a href="D-Lab Section.php">Projects</a></li>
>>>>>>>> a0ab27656da31ead928913ebe1eb320439586709:view/D-Lab/D-Lab Subsec.php
                  <li class="breadcrumb-item active" aria-current="page">Platform Projects</li>
                </ol>
            </section>
        </header>
        <section>
            <label for="maxRows" class="d-inline">Rows to display</label>
            <select class="form-control d-inline w-25" name="state" id="maxRows">
                <option value="5">5</option>
                <option value="10">10</option>
                <option value="15">15</option>
                <option value="25">25</option>
            </select>
            <div class="d-flex justify-content-between align-items-center">
                <h3>
                    Platform Projects
                </h3>
                <section>
                    <select name="date-order" id="">
                        <option value="ASC">Ascending</option>
                        <option value="DESC">Descending</option>
                    </select>
                    <button type="submit">Search icon</button>
                </section>
            </div>
            <table class="table" id="table-id">
                <thead>
                    <th>
                        <strong>Project Title</strong>
                    </th>
                    <th>
                        <strong>Project Lead</strong>
                    </th>
                    <th>
                        <strong>Date Commenced</strong>
                    </th>
                    <th>
                        <strong>Grant Received</strong>
                    </th>
                    <th>

                    </td>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            Make a Change
                        </td>
                        <td>
                            Samuel Doe
                        </td>
                        <td>
                            2022-12-31
                        </td>
                        <td>
                            $14200
                        </td>
                        <td>
<<<<<<<< HEAD:view/D-Lab Subsec.php
                            <a href="D-Lab Section-view.html">
                                <img src="" alt="View icon">
========
                            <a href="D-Lab Section-view.php">
                                <img src="./../../assets/read-more.svg" alt="View icon">
>>>>>>>> a0ab27656da31ead928913ebe1eb320439586709:view/D-Lab/D-Lab Subsec.php
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Building the horizon
                        </td>
                        <td>
                            John Doe
                        </td>
                        <td>
                            2021-10-11
                        </td>
                        <td>
                            $1200
                        </td>
                        <td>
<<<<<<<< HEAD:view/D-Lab Subsec.php
                            <a href="project-view.html">
                                <img src="" alt="View icon">
========
                            <a href="project-view.php">
                                <img src="./../../assets/read-more.svg" alt="View icon">
>>>>>>>> a0ab27656da31ead928913ebe1eb320439586709:view/D-Lab/D-Lab Subsec.php
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Catching the Sun
                        </td>
                        <td>
                            Lewandoski Barnabas
                        </td>
                        <td>
                            2022-04-21
                        </td>
                        <td>
                            $2000
                        </td>
                        <td>
<<<<<<<< HEAD:view/D-Lab Subsec.php
                            <a href="project-view.html">
                                <img src="" alt="View icon">
========
                            <a href="project-view.php">
                                <img src="./../../assets/read-more.svg" alt="View icon">
>>>>>>>> a0ab27656da31ead928913ebe1eb320439586709:view/D-Lab/D-Lab Subsec.php
                            </a>
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class='pagination-container' >
				<div aria-label="Page navigation example">
				  <ul class="pagination">
                    <li class="page-item" data-page="prev" >
                        <span> &laquo; <span class="sr-only"></span></span>
                    </li>
				   <!--	Here the JS Function Will Add the Rows -->
                    <li class="page-item" data-page="next" id="prev">
                        <span> &raquo; <span class="sr-only"></span></span>
                    </li>
				  </ul>
				</div>
			</div>
        </section>
    </main>
</body>
</html>