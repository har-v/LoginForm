<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="updateDetails.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <title>Register</title>
</head>
<body>
<div class='form'>
    <div class="header-image">
        <div class="title">
            USER PROFILE.
        </div>
        <div class="dateSection">
            <div class="day" id="day"></div>
            <div class="center">
                <div class="month" id="month"></div>
                <div class="year" id="year"></div>
            </div>
            <div class="time" id="time"></div>
        </div>
    </div>
    <div class='content-section'>
        <div class="icon-container">
            <a href="userProfile.php"><i class="fa fa-arrow-left icon"></i></a>
        </div>
        <form action="updatePassword.php" method="post" class="update-form" id="update" autocomplete="off">
            <input type="text" class="input" placeholder="Old password" name="oldpassword" required>
            <input type="password" class="input" placeholder="New password" name="newpassword" required>
            <input type="password" class="input" placeholder="Re-enter new password" name="repeatnewpassword" required>
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
    </div>
</div>
<script src="time.js"></script>
<script src="changePassword.php"></script>
</body>
</html>