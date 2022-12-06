<?php
include("../controllers/product_controller.php");




if (isset($_POST['submit'])) {
    $category_name=$_POST["category_name"];
    $add=add_category_controller($category_name);
    if ($add===false) {
        header( "Location: ../admin/dashboard.php?error=Please category has not been added, try again later");
    }else {
        header( "Location: ../admin/dashboard.php?Successfully added");
    }
}

if (isset($_POST['Update'])) {
    $category_name=$_POST["category_name"];
    $category_id=$_POST["cat_id"];
    //echo $category_name. $category_id;
    $update=update_category_controller($category_id,$category_name);
    //var_dump($update);
   if ($update===false) {
        header( "Location: ../admin/dashboard.php?error=Please category has not been updated, try again later");
    }else {
        header( "Location: ../admin/dashboard.php?Successfully updated");
    }
}