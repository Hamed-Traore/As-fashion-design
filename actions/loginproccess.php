<?php 
include ('../controllers/customer_controller.php');
//1- check if the button was click (isset)


//2- Collect the data $GET and $POST
if (isset($_POST['submit'])) {
    $email= $_POST['email'];
    $password= $_POST['password'];
    $result = loginUser_controller($email,$password);
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

?>
