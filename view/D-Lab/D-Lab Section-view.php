<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AEC - Design Lab</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="./../../css/main.css">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" 
    integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" 
    crossorigin="anonymous" async defer></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" 
    integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" 
    crossorigin="anonymous" async defer></script>
    <script src="./../../js/pop.js" async defer></script>
</head>
<body>
    <nav>
        <header class="nav-head pt-4">
            <h1>AEC</h1>
        </header>
        <ul id="list">
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
                    <p>Teaching Across Curriculum</p>
                </li>
            </a>
        </ul>
    </nav>
    <main id="main">
        <header>
            <h1 class="heading mb-4">Design Lab</h1>
            <section aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="../D-Lab.php">..</a></li>
                  <li class="breadcrumb-item"><a href="D-Lab Section.php">Projects</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Projects(View)</li>
                </ol>
            </section>
        </header>
        <section>
            <header>
                <h3>Project: Make a Change</h3>
                <p>Date Commenced: 2022-302-12</p>
            </header>
            <br>
            <!-- Project Members -->
            <h5>Project Members</h5>
            <div class="view-sec">
                <section class="view">
                    <figure class="img-frame">
                        <img class="img-view" src="../../assets/dummy.png" alt="img name">
                        <figcaption>
                            Gupta Sanchez <br>
                            <sub class="text-muted">gupta@gmail.com</sub>
                        </figcaption>
                    </figure>
                    <figure class="img-frame">
                        <img class="img-view" src="../../assets/dummy.png" alt="img name">
                        <figcaption>
                            Gupta Sanchez <br>
                            <sub class="text-muted">gupta@gmail.com</sub>
                        </figcaption>
                    </figure>
                    <figure class="img-frame">
                        <img class="img-view" src="../../assets/dummy.png" alt="img name">
                        <figcaption>
                            Gupta Sanchez <br>
                            <sub class="text-muted">gupta@gmail.com</sub>
                        </figcaption>
                    </figure>
                    <figure class="img-frame">
                        <img class="img-view" src="../../assets/dummy.png" alt="img name">
                        <figcaption>
                            Gupta Sanchez <br>
                            <sub class="text-muted">gupta@gmail.com</sub>
                        </figcaption>
                    </figure>
                </section>
            </div>
            <!-- Project Description -->
            <h5>
                Project Description
            </h5>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean cursus ex in erat condimentum, 
                a rhoncus urna suscipit. Sed lorem arcu, blandit ac sapien at, consectetur fermentum ipsum. Aenean 
                dolor augue, fringilla vel mollis non, facilisis non tellus. Proin eu feugiat metus. Pellentesque 
                ultricies a magna sit amet aliquet. Maecenas felis nibh, sollicitudin id rhoncus ac, consectetur id 
                nulla. Phasellus augue augue, porttitor id odio ac, blandit lobortis lacus. Maecenas eget pellentesque 
                diam, ac molestie est. Duis ullamcorper, eros non mollis interdum, odio magna imperdiet lorem, id faucibus
                lacus ligula ut turpis.
                <br><br>
                Vivamus luctus non ipsum tempor placerat. Cras vitae orci velit. Maecenas sagittis nisl et sapien molestie, eget 
                luctus justo hendrerit. Curabitur commodo lectus quam, vitae ullamcorper nibh hendrerit sit amet. Maecenas eget 
                mauris justo. Donec at neque maximus diam tempor imperdiet. Ut convallis sollicitudin magna in mattis. Nam blandit 
                nisi orci. Cras fermentum arcu erat. Curabitur mollis tellus sit amet felis fermentum dignissim. Nulla facilisi. 
                Etiam nec pulvinar mauris, et ultrices ipsum.
            </p>
            <br>
            <h5>Project Grant</h5>
            <p>
                Coca Cola Fund ($5000)
            </p>
        </section>
    </main>
</body>
</html>