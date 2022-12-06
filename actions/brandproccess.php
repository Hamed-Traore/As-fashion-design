<?php
include("../controllers/product_controller.php");




if (isset($_POST['submit'])) {
    $brand_name=$_POST["brand_name"];
    $add=add_brand_controller($brand_name);
    if ($add===false) {
        header( "Location: ../admin/dashboard.php?error=Please brand has not been added, try again later");
    }else {
        header( "Location: ../admin/dashboard.php?Successfully added");
    }
}

if (isset($_POST['Update'])) {
    $brand_name=$_POST["brand_name"];
    $brand_id=$_POST["brand_id"];
    $update=update_brand_controller($brand_id,$brand_name);
    //ar_dump($update);
   if ($update===false) {
        header( "Location: ../admin/dashboard.php?error=Please brand has not been updated, try again later");
    }else {
        header( "Location: ../admin/dashboard.php?Successfully updated");
    }
}