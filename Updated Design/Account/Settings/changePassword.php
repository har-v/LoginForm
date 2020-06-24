<?php
$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'root';
$DATABASE_PASS = '';
$DATABASE_NAME = 'accountdetails';
$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
if (mysqli_connect_errno()) {
    die ('Failed to connect to MySQL: ' . mysqli_connect_error());
}
if(!isset($_SESSION)){
    session_start();
}

$user = $_SESSION['name'];

if($user) {
    if (isset($_POST['submit'])) {
        $oldpassword = ($_POST['oldpassword']);
        $newpassword = ($_POST['newpassword']);
        $repeatnewpassword = ($_POST['repeatnewpassword']);

        $queryget = mysqli_query($con, "SELECT password FROM logindetails WHERE username='$user'") or die ("Query didn't work");
        $row = mysqli_fetch_assoc($queryget);
        $oldpassworddb = ($row['password']);

        if ($oldpassword == $oldpassworddb) {
            if ($newpassword == $repeatnewpassword) {
                $querychange = mysqli_query($con, "UPDATE logindetails SET password='$newpassword' WHERE username='$user'");
                session_destroy();
                header("Location: ../../Form/login/loginPage.php?message=Your username has been successfully updated.");
                exit();
            } else
                header("Location: settingsPage.php?updatePassword=new");
            exit();
        } else
            header("Location: settingsPage.php?updatePassword=old");
        exit();
    }
    echo file_get_contents('settingsPage.php');
}
else
    die ("You must be logged in to change to your password");
?>
