<?php
//connect to database class
require("../settings/db_class.php");

/**
*General class to handle all functions 
*/
/**
 *@author David Sampah
 * 
 */

class general_class extends db_connection
{
	//--DELETE--//
	function delete_order($order_id){
        $sql="DELETE FROM `orders` WHERE order_id='$order_id'";
        return $this->db_query($sql);
    }

	//--SELECT--//



	//--UPDATE--//



	
	

}

?>