<?php
include("../controllers/product_controller.php");

if (isset($_POST['add_product'])) {
    echo 'here';
    // Collect the data
    $product_name=$_POST['product_name'];
    $price=$_POST['price'];
    $product_cat=$_POST['product_cat'];
    $product_keyword=$_POST['product_keyword'];
    $product_desc=$_POST['product_desc'];
    $adding_date=$_POST['adding_date'];
    $cat_id=$_POST['product_cat'];
    $target_directory = "../images/";
    $product_img=($_FILES["product_img"]["tmp_name"]);
    $target= $target_directory.basename($_FILES['product_img']['name']);
    move_uploaded_file($product_img,$target);

    // echo $product_name;
    // echo "<br>";
    // echo $price;
    // echo "<br>";
    // echo $product_cat;
    // echo "<br>";
    // echo $product_keyword;
    // echo "<br>";
    // echo $product_desc;
    // echo "<br>";
    // echo $product_keyword;
    // echo "<br>";
    // echo $target;
    
    // Add to product
    $add_result=add_product_controller($product_name,$price,$product_desc,$target,$product_keyword,$cat_id,$adding_date);
    if ($add_result==false) {
        header( "Location: ../admin/admin_dashboard.php?msg=<script>alert('Could not add product')</script>");
    }else {
        header( "Location: ../admin/admin_dashboard.php?msg=<script>alert('Successfully Added')</script>");
    }
}

if (isset($_POST['Update'])) {
    $product_id=$_POST['product_id'];
    $product_title=$_POST['product_title'];
    $product_price=$_POST['product_price'];
    $product_brand=$_POST['product_brand'];
    $product_cat=$_POST['product_cat'];
    $product_desc=$_POST['product_desc'];
    $product_keywords=$_POST['product_keywords'];
    $target_directory = "../images/";
    $product_img=($_FILES["product_img"]["tmp_name"]);
    $target= $target_directory.basename($_FILES['product_img']['name']);
    move_uploaded_file($product_img,$target);
    // echo $product_title;
    // echo "<br>";
    // echo $product_price;
    // echo "<br>";
    // echo $product_brand;
    // echo "<br>";
    // echo $product_cat;
    // echo "<br>";
    // echo $product_desc;
    // echo "<br>";
    // echo $product_keywords;
    // echo "<br>";
    // echo $product_id;
    // echo "<br>";
    // echo $target;
    $update_result= update_product_controller($product_id,$product_title,$product_price,$product_brand,$product_cat,$product_desc,$target,$product_keywords);
    // var_dump($update_result);
    if ($update_result==false) {
        header( "Location: ../admin/admin_dashboard.php?msg=success");
    }else {
        header( "Location: ../admin/admin_dashboard.php?msg=Error occured");
    }
}

// admin update statust
if (isset($_POST['update_status'])) {
    $order_status=$_POST['order_status'];
    $order_id=$_POST['order_id'];
    $update_status= update_status_ctr($order_id,$order_status);
    if ($update_result==false) {
        header( "Location: ../admin/update_product.php?error=<script>alert('Could not add product')</script>");
    }else {
        header( "Location: ../admin/product.php?Successfully updated");
    }
}

?>