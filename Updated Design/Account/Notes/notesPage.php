<?php
session_start();
if (!isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
    header('Location: ../../Form/login/login.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="notesPage.css">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Staatliches&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <title>NOTES</title>
</head>
<body>
<div class="container">
    <a href="../Main/mainPage.php"><div class="back"></div></a>
    <div class="title">YOUR</div>
    <div class="sub-title">NOTES</div>
    <div class="logo"></div>
    <hr style="color: white;width: 85%; margin-left: 25px;">
    <div class="content-section">
        <div class="box">
            <div class="header">
                <div class="note-title">NOTE</div>
                <div class="time">1:20 PM</div>
                <div class="date">6th July 2020</div>
            </div>
            <div class = "content-section-description">Lorem ipsum dolor sit” dummy copy text often used to show font face samples, for page layout and design as sample layout text by printers, graphic designers, Web designers, people creating Microsoft Word templates, and many other uses. It mimics the look of real text quite well as you design and set up your page layouts.<br></div>
            <div class="edit-buttons">
                <div class="edit">EDIT</div>
                <div class="delete">DELETE</div>
            </div>
        </div><br>
        <div class="box">
            <div class="header">
                <div class="note-title">NOTE</div>
                <div class="time">1:20 PM</div>
                <div class="date">6th July 2020</div>
            </div>
            <div class = "content-section-description">Lorem ipsum dolor sit” dummy copy text often used to show font face samples, for page layout and design as sample layout text by printers, graphic designers, Web designers, people creating Microsoft Word templates, and many other uses. It mimics the look of real text quite well as you design and set up your page layouts.<br></div>
            <div class="edit-buttons">
                <div class="edit">EDIT</div>
                <div class="delete">DELETE</div>
            </div>
        </div><br>
        <div class="box">
            <div class="header">
                <div class="note-title">NOTE</div>
                <div class="time">1:20 PM</div>
                <div class="date">6th July 2020</div>
            </div>
            <div class = "content-section-description">Lorem ipsum dolor sit” dummy copy text often used to show font face samples, for page layout and design as sample layout text by printers, graphic designers, Web designers, people creating Microsoft Word templates, and many other uses. It mimics the look of real text quite well as you design and set up your page layouts.<br></div>
            <div class="edit-buttons">
                <div class="edit">EDIT</div>
                <div class="delete">DELETE</div>
            </div>
        </div><br>
    </div>
</div>
</body>
</html>