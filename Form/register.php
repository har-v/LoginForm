<?php
$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'root';
$DATABASE_PASS = '';
$DATABASE_NAME = 'accountdetails';
$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
if (mysqli_connect_errno()) {
    die ('Failed to connect to MySQL: ' . mysqli_connect_error());
}

if (!isset($_POST['username'], $_POST['password'], $_POST['email'])) {
    header("Location: formPage.php?register=complete");
    exit();
}
if (empty($_POST['username']) || empty($_POST['password']) || empty($_POST['email'])) {
    header("Location: formPage.php?register=empty");
    exit();
}
if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
    header("Location: formPage.php?register=emal");
    exit();
}
if (strlen($_POST['password']) > 20 || strlen($_POST['password']) < 5) {
    header("Location: formPage.php?register=pwd");
    exit();
}

if ($stmt = $con->prepare('SELECT id, password FROM logindetails WHERE username = ?')) {
    $stmt->bind_param('s', $_POST['username']);
    $stmt->execute();
    $stmt->store_result();
    if ($stmt->num_rows > 0) {
        header("Location: formPage.php?register=usrnme");
        exit();
    } else {
        if ($stmt = $con->prepare('INSERT INTO logindetails (username, password, email) VALUES (?, ?, ?)')) {
            $password = $_POST['password'];
            $stmt->bind_param('sss', $_POST['username'], $password, $_POST['email']);
            $stmt->execute();
            header("Location: formPage.php?register=success");
            exit();
        }
    }
    $stmt->close();
}
$con->close();
?>


