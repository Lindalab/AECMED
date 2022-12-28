<?php 
    require_once dirname(__FILE__)."/../controllers/business_controller.php";
    require_once dirname(__FILE__)."/../controllers/grant_controller.php";
    $business_id = $_GET['business_id'];
    $business = select_one_business_ctr($business_id);
    $business_name = $business['busines_name'];
    $business_sector = $business['sector'];
    $date = $business['year_started'];
    $revenue_generated = total_one_business_revenue_ctr($business_id)['amount'];
    $description = $business['business_description'];
    $employment_created = business_employment_created_ctr($business_id)['number'];

    function business_grant_received($business_id){
        $business_grant = grant_for_a_business_ctr($business_id);

        foreach($business_grant as $grant){
            single_grant_show($grant['grant_name'], $grant['amount_received']);
        }
        
    }

    function single_grant_show($name, $amount){
        echo "
        $name \t($$amount).<br>
        ";
    }

    function show_business_owners($business_id){
        $owners = stakeholder_business($business_id);
        $image = "";
        foreach($owners as $owner){
            $name = $owner['first_name']." ".$owner['last_name'];
            $email = $owner['email'];
            $image = $owner['stakeholder_image'];
            display_business_owners($image, $name, $email);
        }
    }


    function display_business_owners($image, $name, $email){
        if($image === ""){
            $image = "../../assets/dummy.png";
        }
        echo "
        <figure class='img-frame'>
        <img class='img-view' src='$image' alt='img name'>
        <figcaption>
            $name <br>
            <sub class='text-muted'>$email/sub>
        </figcaption>
    </figure>
        ";
    }

    // function get_business_details($business_id, $business_name, $sector){
    //    $business_details = stakeholder_business($business_id);
    //    foreach($business_details as $business){
    //     //   //    $business_id = $business['business_id'];
    //     //     $business_name = $business['busines_name'];
    //     //     $sector = $business['sector'];
    //     //     $date = $business['year_started'];
    //     //     $revenue_generated = get_business_details($business_id);
    //     //     $description = $business['business_decription']; 
        
    //    }
    //    $business_owners
    // }

    // get_business_details(2);

    

?>