<?php
require ('../settings/db_class.php');
//add, edit, and delete class
/**
 * add, edit, and delete class for cart table
 *@author Hamed Traore
 *@version 1.1
 */

class CartClass extends db_connection
{
    function check_for_duplicate($user_id,$product_id)
    {
        $sql = "SELECT * FROM `cart` WHERE `user_id`='$user_id' and `product_id` = '$product_id';";
        return $this->db_fetch_one($sql);
    }

    // add
    function add_to_cart($product_id,$user_id,$ip_address,$quantity)
    {
        $sql="INSERT INTO `cart`(`product_id`, `user_id`, `ip_address`, `quantity`) VALUES ('$product_id','$user_id','$ip_address','$quantity')";
        return $this->db_query($sql);
    }
    function select_all($user_id)
    {
        $sql = "SELECT * FROM `cart` inner join products on `cart`.`product_id`=products.product_id WHERE `user_id`='$user_id'";
        return $this->db_fetch_all($sql);
    }
    function delete_cart($p_id,$c_id)
    {
        $sql= "DELETE FROM cart WHERE `product_id`='$p_id' AND `user_id` = '$c_id'";
        return $this-> db_query($sql);
      
    }
    // qty management
    function increase_quantity($p_id,$c_id){
        $sql = "UPDATE cart SET quantity = (quantity + 1) WHERE product_id='$p_id' AND `user_id`='$c_id'";
        return $this->db_query($sql);
    }
    function decrease_quantity($p_id,$c_id){
        $sql = "UPDATE cart SET quantity =(quantity - 1)WHERE product_id='$p_id' AND `user_id`='$c_id'";
        return $this->db_query($sql);
    }
    // order
    function add_order($user_id,$invoice_no,$order_date,$order_status)
    {
        $sql="INSERT INTO `orders`( `user_id`, `invoice_no`, `order_date`, `order_status`) VALUES ('$user_id','$invoice_no','$order_date','$order_status')";
        return $this->last_id($sql);
    }
    // payment
    function payment($amt,$user_id,$order_id,$currency,$date)
    {
        $sql="INSERT INTO `payment`(`amt`, `user_id`, `order_id`, `currency`, `payment_date`) 
        VALUES ('$amt','$user_id','$order_id','$currency','$date')";
        return $this->db_query($sql);
    }

    // empty cart
    function emptycard($user_id)
    {
        $sql="DELETE FROM `cart` WHERE `user_id`='$user_id'";
        return $this->db_query($sql);
    }

    // count items
    function count_items($c_id)
    {
        $sql = "SELECT COUNT(*)FROM cart WHEREcart.user_id=$c_id;";
        return $this->db_fetch_one($sql);
    }
}


?>