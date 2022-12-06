<?php

require ('../settings/db_class.php');
/**
 *@author Hamed Traore
 *@version 1.1
 */

class product_class extends db_connection
{
    
    //-----------------------------------------------------------------------------------------------------------------------------------
    //add to the category table
    function add_category($category_name){
        $sql="INSERT INTO `categories`(`cat_name`) VALUES ('$category_name')";
        return $this->db_query($sql);
    }

    // select all from category
    function select_all_category()
    {
        $sql="SELECT * FROM `category`";
        return $this->db_fetch_all($sql);
    }

    // select one from category
    function select_one_category($category_id)
    {
        $sql="SELECT * FROM `category` WHERE `cat_id`='$category_id'";
        return $this->db_fetch_one($sql);
    }
    function update_category($category_id,$category_name)
    {
        $sql="UPDATE `categories` SET `cat_name`='$category_name' WHERE `cat_id`='$category_id'";
        return $this->db_query($sql);
    }

    // delete category
    function delete_category($id)
    {
        $sql="DELETE FROM `categories` WHERE `cat_id`='$id'";
        return $this->db_query($sql);
    }
    // count cat in product
    function count_cat_in_products($cat_id)
    {
        $sql="SELECT count(*) FROM products WHERE cat_id = $cat_id";
        return $this->db_query($sql);
    }

    //----------------------------------------------------------------------------------------------------------------------------------------
    //add product
    function add_product($product_name,$price,$product_desc,$product_img,$product_keyword,$cat_id,$adding_date)
    {
        $sql="INSERT INTO `products`( `product_name`, `price`, `product_desc`, `product_img`, `product_keyword`, `cat_id`, `adding_date`)
        VALUES ('$product_name','$price','$product_desc','$product_img','$product_keyword','$cat_id','$adding_date')";
        return $this->db_query($sql);
    }
    // display all product
    function all_product()
    {
        $sql="SELECT * FROM `products`";
        return $this->db_fetch_all($sql);
    }
    // display One product
    function display_one_product($product_id)
    {
        $sql="SELECT * FROM `products` WHERE `product_id`='$product_id'";
        return $this->db_fetch_one($sql);
    }
    //update product
    function update_product($product_id,$product_title,$product_price,$product_brand,$product_cat,$product_desc,$target,$product_keywords)
    {
        $sql="UPDATE `products` 
        SET `product_cat`='$product_cat',`product_brand`='$product_brand',`product_title`='$product_title',
        `product_price`='$product_price',`product_desc`='$product_desc',`product_image`='$target',`product_keywords`='$product_keywords' 
        WHERE `product_id`=$product_id";
        return $this->db_query($sql);
    }
    //delete product
    function delete_product($id)
    {
        $sql="DELETE FROM `products` WHERE `product_id`='$id'";
        return $this->db_query($sql);
    }
    // search
    function search_product($keyword)
    {
        $sql="SELECT * FROM `products` WHERE product_keyword LIKE '%$keyword%'";
        return $this->db_fetch_all($sql);
    }
    
    //===================================================admin====
    //pay display
    function get_all_payments()
    {
        $sql="SELECT * FROM `payment`";
        return $this->db_fetch_all($sql);
    }

    // users
    function select_all_users()
    {
        $sql="SELECT * FROM `users` WHERE `user_id`=2";
        return $this->db_fetch_all($sql);
    }
    //orders
    function select_all_orders()
    {
        $sql = "SELECT first_name, last_name, amt,payment_date,order_status, orders.order_id FROM `orders`
        INNER JOIN `payment` INNER JOIN `users` WHERE payment.order_id=orders.order_id AND users.user_id=payment.user_id 
        ORDER BY `payment`.`payment_date` ASC";
        return $this->db_fetch_all($sql);
    }
    // order status
    function update_status($order_id,$order_status)
    {
        $sql="UPDATE `orders` SET `order_status`='$order_status' WHERE `order_id`=$order_id";
        return $this->db_query($sql);
    }
}


