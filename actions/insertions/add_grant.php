<?php
require_once("../controllers/stakeholder_controller.php");
require_once dirname(__FILE__)."/../controllers/grant_controller.php";

$grant_name = $_POST['grant_name'];
$grant_type = $_POST['grant_type'];
$date_received = $_POST['date_received'];
$grant_desc = $_POST['grant_description'];
$department_id = $_POST['department'];
$amount = $_POST['amount'];



$root_dir = "../../images/grants";
$upload_root_dir = "../images/grants/";
$file = $_FILES["grant_company_image"];
$file_dest = $root_dir . "/" . basename(str_replace(' ', '_', $file["name"]));
$upload_file_dest = $upload_root_dir . basename(str_replace(' ', '_', $file["name"]));
$file_type = strtolower(pathinfo($file_dest, PATHINFO_EXTENSION));

$move = move_uploaded_file($file["tmp_name"], $file_dest);

if ($move) {
    $insert = create_grant_ctr($grant_name, $grant_type, $date_received, $grant_desc, $upload_file_dest, $department_id, $amount);
    if ($insert) {
        header("location: ../view/index.php?message=1");
    } else {
        // header("location:../view/index.php?message=2");
        echo "error 2";
    }
} else {
    // header("location: ../view/index.php?message=2");
    echo "error";
}
