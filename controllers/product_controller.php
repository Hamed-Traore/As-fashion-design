<?php
//connect to the product class
include("../classes/product_class.php");


//-------------------------------------------------------------------------------------------------------------------------------------------------
//display all categories
function select_all_category_controller()
{
    $select_all= new product_class();
    return $select_all->select_all_category();
}

// colect data for the update
function select_one_category_controller($category_id)
{
    $select_one= new product_class();
    return $select_one->select_one_category($category_id);
}


// add category
function add_category_controller($category_name)
{
    $add= new product_class();
    return $add->add_category($category_name);
} 

//update category
function update_category_controller($category_id,$category_name)
{
    $update= new product_class();
    return $update->update_category($category_id,$category_name);
}

// delete category
function delete_category_controller($id)
{
    $delete= new product_class();
    return $delete->delete_category($id);
}
// count cat in product
function count_cat_in_products_controller($cat_id)
{
    $count= new product_class();
    return $count->count_cat_in_products($cat_id);
}

//-------------------------------------------------------------------------------------------------------------------------------------------------
// add product
function add_product_controller($product_name,$price,$product_desc,$product_img,$product_keyword,$cat_id,$adding_date)
{
    $add= new product_class ();
    return $add->add_product($product_name,$price,$product_desc,$product_img,$product_keyword,$cat_id,$adding_date);
}
// display all product
function select_all_product()
{
    $display_all= new product_class();
    return $display_all->all_product();
}
// display one product
function display_one_product_controller($id)
{
    $select_one= new product_class();
    return $select_one->display_one_product($id);
}
//update product
function update_product_controller($product_id,$product_title,$product_price,$product_brand,$product_cat,$product_desc,$target,$product_keywords)
{
    $update= new product_class();
    return $update->update_product($product_id,$product_title,$product_price,$product_brand,$product_cat,$product_desc,$target,$product_keywords);
}
//delete product
function delete_product_controller($id)
{
    $delete= new product_class();
    return $delete->delete_product($id);
}
// search from ptroduct
function search_product_controller($keyword)
{
    $search= new product_class();
    return $search->search_product($keyword);
}
// ==================================admin=====================
// sales
function get_all_payments_controller()
{
    $sales= new product_class();
    return $sales->get_all_payments();
}
//  users
function select_all_users_ctr()
{
    $users= new product_class();
    return $users->select_all_users();
}
// orders
function select_all_orders_ctr()
{
    $users= new product_class();
    return $users->select_all_orders();
}
// status
function update_status_ctr($order_id,$order_status)
{
    $update= new product_class ();
    return $update->update_status($order_id,$order_status);
}


?>