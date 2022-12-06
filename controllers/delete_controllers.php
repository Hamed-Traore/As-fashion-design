<?php
include('../classes/general_class.php');
function delete_order_ctr($order_id)
{
    $delete= new general_class();
    return $delete->delete_order($order_id);
}
?>