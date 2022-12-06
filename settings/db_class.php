<?php
//database

//database credentials
require('db_cred.php');

/**
 *@author david Sampah
 *@version 1.1
 */
class db_connection
{
	//properties
	public $db = null;
	public $results = null;

	//connect
	/**
	*Database connection
	*@return bolean
	**/
	function db_connect(){
		
		//connection
		$this->db = mysqli_connect(SERVER,HOST,PASSWD,DB);
		
		//test the connection
		if (mysqli_connect_errno()) {
			return false;
		}else{
			return true;
		}
	}

	//execute a query
	/**
	*Query the Database
	*@param takes a connection and sql query
	*@return bolean
	**/
	function db_query($sqlQuery){
		
		if (!$this->db_connect()) {
			return false;
		} 
		elseif ($this->db==null) {
			return false;
		}

		//run query 
		$this->results = mysqli_query($this->db,$sqlQuery);
		
		if ($this->results == false) {
			return false;
		}else{
			return true;
		}
	}

	//execute a query with mysqli real escape string
	//to saveguard from sql injection
	/**
	*Query the Database
	*@param takes a connection and sql query
	*@param takes a sequence. ex: "ssi" meaning s for string and i for integer
	*@param takes an array of values to be inserted
	*@return bolean
	**/
	function db_query_escape_string($sqlQuery,$sequence,$values=array()){
		
		//run query 
		if($this->results = mysqli_prepare($this->db,$sqlQuery)){
		// Bind variables to the prepared statement as parameters
		mysqli_stmt_bind_param($this->results,$sequence,$values);
		mysqli_stmt_execute($this->results);
		echo "Records inserted successfully.";
		}else{
    		echo "ERROR: Could not prepare query: $sqlQuery. " . mysqli_error($this->db);
		}
		// if ($this->results == false) {
		// 	return false;
		// }else{
		// 	return true;
		// }
	}

	//fetch a data
	/**
	*get select data
	*@return a record
	**/
	function db_fetch_one($sql){
		
		// if executing query returns false
		if(!$this->db_query($sql)){
			return false;
		} 
		//return a record
		return mysqli_fetch_assoc($this->results);
	}

	//fetch all data
	/**
	*get select data
	*@return all record
	**/
	function db_fetch_all($sql){
		
		// if executing query returns false
		if(!$this->db_query($sql)){
			return false;
		} 
		//return all record
		return mysqli_fetch_all($this->results, MYSQLI_ASSOC);
	}


	//count data
	/**
	*get select data
	*@return a count
	**/
	function db_count(){
		
		//check if result was set
		if ($this->results == null) {
			return false;
		}
		elseif ($this->results == false) {
			return false;
		}
		
		//return a record
		return mysqli_num_rows($this->results);

	}

	// get last inserted id
	function last_id($sqlQuery)
	{
		$conn=mysqli_connect(SERVER,HOST,PASSWD,DB);
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		}else {
			echo "connected <br>";
		}
		$result=$conn->query($sqlQuery);
		$id= mysqli_insert_id($conn);
		if ($result) {
			return $id;
		} else {
			die("did not add ".mysqli_error($conn));
		}
	}
	
}
?>