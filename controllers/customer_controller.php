<?php
//connect to the user account class
include("../classes/CustomerClass.php");


//sanitize data

 

//--INSERT--//
//===================SQL injection=========================
// function register_controller($sequence,$values=array(),$email,$password)
// {
    
//     //check if email already exist
    
//     $check= new CustomerClass();
//     $user=$check ->  Check_email_exist($values["$email"]);
//     // var_dump($user);
//     if (isset($user['email']))
//     {
//         header( "Location: ../view/register.php?error=Please this email is already used");
//     } else{
            
//         $password=$values["$password"];
//         $add_customer= new CustomerClass();
//         $add_customer->add_customer($sequence,$values,$password);
//         // header( "Location: ../view/login.php?successfull ");
//     }
    
// }

function register_controller($first_name,$last_name,$date_of_birth,$phone_number,$email,$password,$country,$user_role)
{
    //check if email already exist
    $check= new CustomerClass();
        $user=$check ->  Check_email_exist($email);
        //print_r($user);
        if (isset($user['email']))
        {
            header( "Location: ../view/register.php?error=Please this email is already used");
        } else 
        {
            //check if password match
            $add_customer= new CustomerClass();
            $add_customer->add_customer($first_name,$last_name,$date_of_birth,$email,$phone_number,$country,$password,$user_role);
            header( "Location: ../view/login.php?successfull ");
        }
    
}

function loginUser_controller($customer_email,$customer_pass)
    {
        session_start();
        $check= new CustomerClass();
        $user=$check ->  Check_email_exist($customer_email);
        // print_r($user);
        
        
        if ($user==false)
        {
            return false;
        } else 
        {
            //check if password match    
            $matching= password_verify($customer_pass,$user["password"]);
            if ($matching!==true)
            {
                return false;
            } else 
            {
                
                $_SESSION['user_id']=$user["user_id"];
                $_SESSION['user_role'] =$user['user_role'];
                $_SESSION['last_name']= $user['last_name'];
                $_SESSION['email']= $user['email'];
                
            }
         }
       
    } 



//--SELECT--//

//--UPDATE--//

//--DELETE--//

?>