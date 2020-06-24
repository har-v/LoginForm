<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../register/registerPage.css">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Staatliches&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <title>LOGIN</title>
</head>
<body>
<div class="container">
    <div class="title">LUCID NOTES</div>
    <form action="login.php" method="post" class="register-form" id="login" autocomplete="off">
            <input type="text" class="input" placeholder="USERNAME" name="username" required>
            <input type="password" class="input" placeholder="PASSWORD" name="password" required>
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
        <div class="buttons">
            <button type="submit" class="login">LOGIN</button>
        </div>
    </form>
    <div class="page-link">Don't have an account?<a href="../register/registerPage.php"><b> Register</b></a>.</div>
</div>
</body>
</html>