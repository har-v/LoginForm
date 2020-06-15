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
        <form action="updateUsername.php" method="post" class="update-form" id="update" autocomplete="off">
            <input type="text" class="input" placeholder="Old username" name="oldusername" required>
            <input type="text" class="input" placeholder="New username" name="newusername" required>
            <input type="text" class="input" placeholder="Re-enter new username" name="repeatnewusername" required>
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
<script src="time.js"></script>
<script src="updateUsername.php"></script>
</body>
</html>