<?php
require_once dirname(__FILE__)."/../../controllers/business_controller.php";

$businessid=$_GET['businessid'];
$data=abusiness_data($businessid);
$businessName = $data['business_name'];
$business_description = $data['business_description'];
$business_logo = $data['business_logo'];
$business_email = $data['business_email'];
$sector = $data['sector'];
$business_contact = $data['business_contact'];
$formalised_structure = $data['formalised_structure'];
$sdg_alignment = $data['sdg_alignment'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AEC - Ashesi Venture Incubator</title>
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
            <a href="../AVI.php" class="links" id='active'>
                <li class="link">
                    <img class="nav-logo" src="./../../assets/avi-icon.svg" alt="Ashesi Venture Incubator Icon">
                    <p>Ashesi Venture Incubator</p>
                </li>
            </a>
            <a href="../D-Lab.php" class="links">
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
            <h1 class="heading mb-4">Ashesi Venture Incubator</h1>
            <section aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="../AVI.php">..</a></li>
                  <li class="breadcrumb-item"><a href="AVI businesses.php">Businesses</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Businesses(View)</li>
                </ol>
            </section>
        </header>
        <section>
            <header>
                <h3>Business Name: <?php echo $businessName;?></h3>
                <p>Business Email: <?php echo $business_email;?></p>
                <p>Business Sector: <?php echo $sector;?></p>
                <p>Business Contact: <?php echo $business_contact; ?></p>
                <p>Business Formalised structure:<?php echo $formalised_structure;?></p>
                <p>SD Goals : <?php echo $sdg_alignment; ?></p>
            </header>
            <br>
            <h5>
                Business Logo
            </h5>
            <div class="view-sec">
                <section class="view">
                    <figure class="img-frame">
                        <img class="img-view" src="../<?php echo $business_logo;?>" alt="img name">
                        <figcaption>
                            Gupta Sanchez <br>
                            <sub class="text-muted"><?php echo $business_email;?></sub>
                        </figcaption>
                    </figure>
                    
                </section>
            </div><br>
            <h5>
                Business Description
            </h5>
            <p>
               <?php echo $business_description;?>
                <!-- <br><br>
                Vivamus luctus non ipsum tempor placerat. Cras vitae orci velit. Maecenas sagittis nisl et sapien molestie, eget 
                luctus justo hendrerit. Curabitur commodo lectus quam, vitae ullamcorper nibh hendrerit sit amet. Maecenas eget 
                mauris justo. Donec at neque maximus diam tempor imperdiet. Ut convallis sollicitudin magna in mattis. Nam blandit 
                nisi orci. Cras fermentum arcu erat. Curabitur mollis tellus sit amet felis fermentum dignissim. Nulla facilisi. 
                Etiam nec pulvinar mauris, et ultrices ipsum. -->
            </p>
            <br>
        </section>
    </main>
</body>
</html>