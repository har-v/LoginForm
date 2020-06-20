<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="form.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <title>Register</title>
</head>
<body>
<div class="form">
    <div class="header-image">
        <div class="toggle-buttons">
            <div id="btn"></div>
            <button type="button" class="toggle-btn" onclick="register()">SIGN UP</button>
            <button type="button" class="toggle-btn" onclick="login()">LOGIN</button>
        </div>
    </div>
    <form action="register.php" method="post" class="register-form" id="register" autocomplete="off">
        <div class="icon-container">
            <i class="fa fa-user-o icon"></i>
            <input type="text" class="input" placeholder="Username" name="username" required>
        </div>
        <div class="icon-container">
            <i class="fa fa-envelope-o icon"></i>
            <input type="email" class="input" placeholder="E-mail" name="email" required>
        </div>
        <div class="icon-container">
            <i class="fa fa-key icon"></i>
            <input type="password" class="input" placeholder="Password" name="password" required>
        </div>
        <?php
        $fullUrl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

        if(strpos($fullUrl, "register=complete") == true) {
            echo "<p class='error-msg'>Please fill out the sign up form.</p>";
        }
        elseif (strpos($fullUrl, "register=empty") == true){
            echo "<p class='error-msg'>Please fill out the sign up form. </p>";
        }
        elseif (strpos($fullUrl, "register=emal") == true){
            echo "<p class='error-msg'>The email you have entered is not valid.</p>";
        }
        elseif (strpos($fullUrl, "register=pwd") == true){
            echo "<p class='error-msg'>Your passsword must be between 5 and 20 characters long. </p>";
        }
        elseif (strpos($fullUrl, "register=usrnme") == true){
            echo "<p class='error-msg'>The username you have entered already exists, please choose another.</p>";
        }
        elseif (strpos($fullUrl, "register=success") == true){
            echo "<p class='error-msg'>You have successfully signed up.</p>";
        }
        ?>
        <button type="submit" class="submit-button"> REGISTER</button>
    </form>
    <form action="login.php" method="post" class="login-form" id="login" autocomplete="off">
        <div class="icon-container">
            <i class="fa fa-user-o icon"></i>
            <input type="text" class="input" placeholder="Username" name="username" required>
        </div>
        <div class="icon-container">
            <i class="fa fa-key icon"></i>
            <input type="password" class="input" placeholder="Password" name="password" required>
        </div>
         <?php
        $fullUrl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

         if(strpos($fullUrl, "register=blank") == true) {
             echo "<p class='error-msg'>Please enter both your username and password.</p>";
         }
        elseif(strpos($fullUrl, "register=usnm") == true) {
            echo "<p class='error-msg'>You have entered in an incorrect username. Please try again.</p>";
        }
        elseif (strpos($fullUrl, "register=passw") == true) {
            echo "<p class='error-msg'>You have entered an incorrect password. Please try again.</p>";
        }

         if (!empty($_GET['message'])) {
             $message = $_GET['message'];
             echo '<p class="message">' . $message . '</p>';
         }

         ?>
        <button type="submit" class="submit-button">LOGIN</button>
    </form>
</div>
<script src="login.php"></script>
<script src="register.php"></script>
<script src="form.js"></script>

</body>
</html>