<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/logo/logo.ico">
    <link rel = "stylesheet" href = "../css/register_style.css">
    <link rel="stylesheet" href="../css/parsley.css">
    
    <title>Registration form</title>
</head>
    <body>
                
        <div class = "container" >
             <!-- ADD THIS ATTRIBUTE TO THE FORM TO ALSO VALIDATE WITH JAVASCRIPT BEFORE SUBMITTING TO BACKEND:
              onsubmit="return validateForm(event);" -->
                <small id="error"></small>
            <form  method="POST" action="../actions/registerprocess.php" id="form" class="form" data-parsley-validate="">
                        <h2>Register With Us</h2>
                        <h5 style="color: red;">
                            <?php
                                if (isset($_GET["error"])){
                                    echo $_GET["error"];
                                }
                            ?>
                        </h5><br>
                        <div class="form-control ">
                            <label for="first_name">First name:</label>
                            <input type="text" id="first_name" name="first_name" data-parsley-required="true">
                            <small id="first_nameError"></small>
                        </div>
                        <div class="form-control ">
                            <label for="last_name">Last name:</label>
                            <input type="text" id="last_name" name="last_name" data-parsley-required="true">
                            <small id="last_nameError"></small>
                        </div>
                        <div class="form-control ">
                            <label for="date_of_birth">date of birth:</label>
                            <input type="date" id="date_of_birth" name="date_of_birth" data-parsley-required="true">
                            <small id="date_of_birthError"></small>
                        </div>
                        <div class="form-control">
                            <label for="phone_number">Contact Number:</label>
                            <input type="text" id="phone_number" name="phone_number" data-parsley-required="true">
                            <small id="phone_numberError"></small>
                        </div>

                        <div class="form-control ">
                            <label for="email">Email address:</label>
                            <input type="email"  id="email" name="email" data-parsley-required="true" >
                            <small id="emailError"></small>
                        </div>

                        <div class="form-control">
                            <label for="password">Password:</label>
                            <input type="password" id="password" name="password" data-parsley-required="true" >
                        </div>

                        <div class="form-control">
                            <label for="conf_password">Confirm password:</label>
                            <input type="password" class="form-control" id="conf_password" name="conf_password" data-parsley-required="true">
                            <small id="conf_passwordError"></small>
                        </div>
                        

                        <div class="form-control">
                            <label for="country">Country:</label>
                            <input type="text" id="country" name="country" data-parsley-required="true">
                            <small id="countryError"></small>
                        </div>
                        <input type="hidden" value="2" name="user_role">
                        <button type="submit" name="register">Create account</button>

                        <!-- <button type="submit" class="btn btn-primary" name="submit" id="submit" >Create account</button><br> -->

                        Already have an account? <a href="login.php">Login</a>
            </form>
                
        </div>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="../js/parsley.js"></script>
        
    </body>

</html>
