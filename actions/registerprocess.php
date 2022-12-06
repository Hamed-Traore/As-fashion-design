<?php 
include ('../controllers/customer_controller.php');
//1- check if the button was click (isset)


//2- Collect the data $GET and $POST
if (isset($_POST['register'])) {
    
    $first_name= $_POST['first_name'];
    $last_name= $_POST['last_name'];
    $date_of_birth= $_POST['date_of_birth'];
    $phone_number= $_POST['phone_number'];
    $email= $_POST['email'];
    $password= $_POST['password'];
    $conf_password= $_POST['conf_password'];
    $country= $_POST['country'];
    $user_role= $_POST['user_role'];
    
    // check if password matches
    if ($password!=$conf_password) {
        header("Location: ../view/register.php?error=Password Don't match");
    }
    // $values=array($first_name=>$first_name,
    //     $last_name=>$last_name,
    //     $date_of_birth=>$date_of_birth,
    //     $email=>$email,
    //     $phone_number=>$phone_number,
    //     $country=>$country,
    //     $password=>$password,
    //     $user_role=>$user_role
    // );
    // $sequence="ssssissi";
    $result = register_controller($first_name,$last_name,$date_of_birth,$phone_number,$email,$password,$country,$user_role);
    
    // if ($result==true) {
    //     header( "Location: ../view/login.php?successfull ");
    // } else {
    //     header( "Location: ../view/register.php?error=NOT_successfull ");
    // }
    
   
}




?>