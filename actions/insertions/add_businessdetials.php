
<?php 
    require_once dirname(__FILE__).("/../../controllers/business_controller.php");

    $business_id=$_GET['business_id'];
    $number_of_employees= $_GET['employees'];
    $formalised_structure=$_GET['structures'];
    $sdg_alignment=$_GET['sdg'];

    $insert = create_business_details_ctr($business_id,$number_of_employees, $formalised_structure, $sdg_alignment);

    if($insert){
        header("location: ../view/index.php?message=1");
    }else{
        header("location:../view/index.php?message=2");
    }


?>