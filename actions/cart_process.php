<?php
include('../controllers/cart_controller.php');
isset($_GET['product_id'] );
if (isset($_GET['action'] )  && isset($_GET['user_id'] )  && isset($_GET['product_id'] )) {
    $action=$_GET['action'];
    $product_id=$_GET['product_id'];
    $user_id=$_GET['user_id'];
    if ($action=='add') {
        increase_quantity_controller($product_id,$user_id);
        header( "Location: ../view/cart.php");
    }elseif ($action=='minus') {
        decrease_quantity_controller($product_id,$user_id);
        header( "Location: ../view/cart.php");
    }
    elseif ($action=='delete') {
        delete_cart_controller($product_id,$user_id);
        header( "Location: ../view/cart.php?msg=Delected successfully");
    }
}
else{
    header( "Location: ../view/cart.php?msg=please please try updating the quantity again");
}
?>