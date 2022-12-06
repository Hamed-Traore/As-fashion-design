<?php
//connect to the user account class
include("../classes/cart_class.php");

function check_for_duplicate_controller($user_id,$product_id)
{
    $check= new CartClass ();
    return $check->check_for_duplicate($user_id,$product_id);
}

// add to cart controller
function add_to_cart_controller($product_id,$user_id,$ip_address,$quantity)
{
    $add= new CartClass ();
    return $add->add_to_cart($product_id,$user_id,$ip_address,$quantity);
}

// card info
function get_all_cart_info_controller($user_id)
{
    $cart_info= new CartClass ();
    return $cart_info->select_all($user_id);
}

// delete cart 

function delete_cart_controller($p_id,$user_id)
{
    $delete=new CartClass();
    return $delete->delete_cart($p_id,$user_id);
}

// increase qty
function increase_quantity_controller($p_id,$user_id)
{
    $add=new CartClass();
    return $add->increase_quantity($p_id,$user_id);
}
// decrease qty
function decrease_quantity_controller($p_id,$user_id)
{
    $sub=new CartClass();
    return $sub->decrease_quantity($p_id,$user_id);
}
// add to order
function add_order_controller($user_id,$invoice_no,$order_date,$order_status)
{
    $add=new CartClass();
    return $add->add_order($user_id,$invoice_no,$order_date,$order_status);
}
// add payment
function payment_controller($amt,$user_id,$order_id,$currency,$date)
{
    $pay_add=new CartClass();
    return $pay_add->payment($amt,$user_id,$order_id,$currency,$date);
}
// empty cart after payment
function emptycard_controller($user_id)
{
    $empty=new CartClass();
    return $empty->emptycard($user_id);
}
function count_items_controller($c_id)
{
    $count=new CartClass();
    return $count->count_items($c_id);
}
