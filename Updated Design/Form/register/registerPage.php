<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="registerPage.css">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Staatliches&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <title>REGISTER</title>
</head>
<body>
<div class="container">
    <div class="title">LUCID NOTES</div>
    <form action="register.php" method="post" class="register-form" id="register" autocomplete="off">
            <input type="text" class="input" placeholder="USERNAME" name="username" required>
            <input type="email" class="input" placeholder="E-MAIL" name="email" required>
            <input type="password" class="input" placeholder="PASSWORD" name="password" required>
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
            if (!empty($_GET['message'])) {
                $message = $_GET['message'];
                echo '<p class="message">' . $message . '</p>';
            }
        ?>
        <div class="buttons">
            <button type="submit" class="register">REGISTER</button>
        </div>
    </form>
    <div class="page-link">Already have an account?<a href="../login/loginPage.php"><b> Login</b></a>.</div>
</div>
</body>
</html>