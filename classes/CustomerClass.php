<?php
// contact phonte entiy

use LDAP\Result;

require ('../settings/db_class.php');
//add, edit, and delete class
/**
 * add, edit, and delete class for customer table
 *@author Hamed Traore
 *@version 1.1
 */

class CustomerClass extends db_connection
{
    // =======================secured stmt===============================
    // function add_customer($sequence,$values=array(),$password)
    // {
    //     $values["$password"]= password_hash($values["$password"], PASSWORD_DEFAULT);
    //     // echo $values["$password"].'<br>';
    //     // echo $password.'<br>';
    //     // print_r($values);
    //     // write the sql

    //     // foreach ($values as $value) {
    //     //     echo ',?';
    //     // }
    //     $sqlQuery="INSERT INTO `users`(`first_name`, `last_name`, `date_of_birth`, `email`, `phone_number`, `country`, `password`, `user_role`)
    //     VALUES (?,?,?,?,?,?,?,?)";
    //     return $this->db_query_escape_string($sqlQuery,$sequence,$values);
    // }


    function add_customer($first_name,$last_name,$date_of_birth,$email,$phone_number,$country,$password,$user_role)
    {
        $hash= password_hash($password, PASSWORD_DEFAULT);
        // write the sql
        $sqlQuery="INSERT INTO `users`(`first_name`, `last_name`, `date_of_birth`, `email`, `phone_number`, `country`, `password`, `user_role`)
        VALUES ('$first_name','$last_name','$date_of_birth','$email','$phone_number','$country','$hash','$user_role')";
        //execute with method in db_connection
        return $this->db_query($sqlQuery);
    }

    function Check_email_exist($email)
    {
        // $hash= password_hash($customer_pass, PASSWORD_DEFAULT);
        $sqlQuery="SELECT * FROM `users` WHERE `email`='$email'";
        return $this->db_fetch_one($sqlQuery);
        // if ($result==false) {
        //     return false;
        // } else {
        //     $hash=$result["customer_pass"];
        //     return $hash;

        //     $matching= password_verify($customer_pass,$hash);
        //     if ($matching!==true) {
        //         header( "Location: ../view/login.php?successfull");
        //     } else {
        //         header( "Location: ../view/login.php?successfull");
        //     }
        // }
        
        // return $this->db_query($sqlQuery);
    }
    
    
}



?>