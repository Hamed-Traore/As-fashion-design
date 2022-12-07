<?php 
include ('../controllers/customer_controller.php');
//1- check if the button was click (isset)


//2- Collect the data $GET and $POST
if (isset($_POST['submit'])) {
    $email= $_POST['email'];
    $password= $_POST['password'];
    $result = loginUser_controller($email,$password);
    // var_dump($result);
    if ($result===false) {
        header( "Location: ../view/login.php?error=Please you typed a wrong Email or password");
    }
    else {
        if ($_SESSION['user_role']==1) {
            header( "Location: ../admin/admin_dashboard.php");
        }
        else {
            header( "Location: ../view/customer_dashboard.php");
        }
        
    }
   
}

if (isset($_POST['profile_update'])) {
    $first_name= $_POST['first_name'];
    $last_name= $_POST['last_name'];
    $phone_number= $_POST['phone_number'];
    $email= $_POST['email'];
    $country= $_POST['country'];
    $user_id= $_POST['user_id'];
    $profile_update=profile_update_ctr($user_id,$first_name,$last_name,$email,$phone_number,$country);
    if ($profile_update) {
        header( "Location: ../admin/admin_dashboard.php?msg= changes saved");
    }else {
        header( "Location: ../view/login.php?msg= changes not saved");
    }
}



?>
