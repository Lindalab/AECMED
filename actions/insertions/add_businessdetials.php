
<?php 
    require_once("../controllers/business_controller.php");

    $business_id=$_POST['business_id'];
    $number_of_employees= $_POST['number_of_employees'];
    $formalised_structure=$_POST['formalised_structure'];
    $sdg_alignment=$_POST['sdg_alignment'];

    $insert = create_business_details_ctr($business_id,$number_of_employees, $formalised_structure, $sdg_alignment);

    if($insert){
        header("location: ../view/index.php?message=1");
    }else{
        header("location:../view/index.php?message=2");
    }


?>