<?php
session_start();
if (!isset($_SESSION['loggedin'])) {
    header('Location: ../Form/formPage.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="userProfile.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <title>Register</title>
</head>
<body>
<div class="form">
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
    <div class="content-section">
        <div class="icon-container">
            <i class="fa fa-user-o icon"></i>
            <button type="submit" class="submit-button"><a href="changeUsername.php">CHANGE USERNAME</button>
        </div>
        <div class="icon-container">
            <i class="fa fa-key icon"></i>
            <button type="submit" class="submit-button"><a href="changePassword.php">CHANGE PASSWORD</a></button>
        </div>
        <div class="icon-container">
            <i class="fa fa-arrow-left icon"></i>
            <button type="submit" class="submit-button"><a href="logout.php" style="float: left;">&nbsp;&nbsp;&nbsp;LOGOUT</a></button>
        </div>
    </div>
</div>
<script src="time.js"></script>
</body>
</html>