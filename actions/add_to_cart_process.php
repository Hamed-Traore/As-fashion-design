<?php
include('../settings/core.php');
include('../controllers/cart_controller.php');
$ip_address=$_SERVER['REMOTE_ADDR'];
$product_id=$_GET['product_id'];
$quantity=1;//default
$user_id;
$check=check_for_duplicate_controller($user_id,$product_id);
if ($check==NULL) {
    //add to cart
    $add=add_to_cart_controller($product_id,$user_id,$ip_address,$quantity);
    if ($add==false) {
        header( "Location: ../view/customer_dashboard.php?msg=please Item couldnot be added to cart");
    }else {
        header( "Location: ../view/shop.php?msg=Successfully added");
    }
}else {
    header( "Location: ../view/cart.php?msg=please increase the quantity here");
}
// var_dump($check);
// echo '<br>'; 
// echo 'User IP Address: '.$_SERVER['REMOTE_ADDR']; 
// echo '<br>'; 
// echo 'product id is: '.$_GET['product_id'];
// echo '<br>';
// echo 'quantity is: '.$qty; 
// echo '<br>';
// echo 'User id is: '.$user_id;


?>
