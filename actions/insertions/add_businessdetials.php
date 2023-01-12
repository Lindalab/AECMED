
<?php 
    require_once dirname(__FILE__).("/../../controllers/business_controller.php");

    $business_id=$_GET['business_id'];
    $number_of_employees= $_GET['employees'];
    $formalised_structure=$_GET['structures'];
    $sdg_alignment=$_GET['sdg'];
    $department = $_GET['department'];

    $insert = create_business_details_ctr($business_id,$number_of_employees, $formalised_structure, $sdg_alignment);

    if($insert){
        if($department == AVI){
            header("location: ../../admin/AVI/business hybrid.php?message=1");
        }else if($department == TAC){
            header("location: ../../admin/TAC/businesses.php?message=1");
        }
        
    }else{
        if($department == AVI){
            header("location: ../../admin/AVI/business hybrid.php?message=2");
        }else if($department == TAC){
            header("location: ../../admin/TAC/businesses.php?message=2");
        }
    }


    

?>