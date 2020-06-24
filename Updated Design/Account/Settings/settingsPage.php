<?php
session_start();
if (!isset($_SESSION['loggedin'])) {
    header('Location: ../../Form/login/login.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="settingsPage.css">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Staatliches&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <title>SETTINGS</title>
</head>
<body>
<div class="container">
    <a href="../Main/mainPage.php"><div class="back"></div></a>
    <div class="logo"></div>
    <div class="title">HEY,</div>
    <div class="user">
        <?php echo $_SESSION["name"]; ?>
    </div>
    <hr style="color: white;width: 85%; margin-left: 25px;">
    <div class="toggle-buttons">
        <div id="btn"></div>
        <button type="button" class="toggle-btn" onclick="changePassword()">UPDATE PASSWORD</button>
        <button type="button" class="toggle-btn" onclick="changeUsername()">UPDATE USERNAME</button>
    </div>
    <div class="content-section">
        <form action="changePassword.php" method="post" class="password-form" id="password" autocomplete="off">
            <input type="text" class="input" placeholder="OLD PASSWORD" name="oldpassword" required>
            <input type="password" class="input" placeholder="NEW PASSWORD" name="newpassword" required>
            <input type="password" class="input" placeholder="RE-ENTER NEW PASSWORD" name="repeatnewpassword" required>
            <?php
            $fullUrl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

            if (strpos($fullUrl, "updatePassword=new") == true) {
                echo "<p class='error-msg'>New passwords do not match.</p>";
            }
            elseif (strpos($fullUrl, "updatePassword=old") == true) {
                echo "<p class='error-msg'>Old password entered is incorrect.</p>";
            }
            ?>
            <button type="submit" class="submit-button" name="submit">UPDATE PASSWORD</button>
        </form>
        <form action="changeUsername.php" method="post" class="username-form" id="username" autocomplete="off">
            <input type="text" class="input" placeholder="OLD USERNAME" name="oldusername" required>
            <input type="text" class="input" placeholder="NEW USERNAME" name="newusername" required>
            <input type="text" class="input" placeholder="RE-ENTER NEW USERNAME" name="repeatnewusername" required>
            <?php
            $fullUrl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

            if (strpos($fullUrl, "updateUsername=new") == true) {
                echo "<p class='error-msg'>New usernames do not match.</p>";
            }
            elseif (strpos($fullUrl, "updateUsername=old") == true) {
                echo "<p class='error-msg'>Old username entered is incorrect.</p>";
            }
            ?>
            <button type="submit" class="submit-button" name="submit">UPDATE USERNAME</button>
        </form>
    </div>
</div>
<script src="settingsPage.js"></script>
</body>
</html>