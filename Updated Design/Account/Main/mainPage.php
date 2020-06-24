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
    <link rel="stylesheet" href="mainPage.css">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Staatliches&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <title>MAIN PAGE</title>
</head>
<body>
<div class="container">
    <div class="logo"></div>
    <div class="title">HEY,</div>
    <div class="user">
        <?php echo $_SESSION["name"]; ?>
    </div>
    <hr style="color: white;width: 85%; margin-left: 25px;">
    <div class="row row-1">
       <button class="button">
           <a href="../Notes/notesPage.php">
           <div id="icon1"></div>
          <div class="text">NOTES</div>
           </a>
       </button>
       <button class="button">
           <a href="../How%20to/Howto.php">
           <div id="icon2"></div>
           <div class="text">HOW TO</div>
           </a>
       </button>
   </div>
   <div class="row row-2">
       <button class="button">
           <a href="../Settings/settingsPage.php">
           <div id="icon3"></div>
           <div class="text">SETTINGS</div>
           </a>
       </button>
       <button class="button">
           <a href="logout.php">
           <div id="icon4"></div>
           <div class="text">LOG OUT</div>
           </a>
       </button>
   </div>
</div>
</body>
</html>