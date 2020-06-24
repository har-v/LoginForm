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
        $oldusername = ($_POST['oldusername']);
        $newusername = ($_POST['newusername']);
        $repeatnewusername = ($_POST['repeatnewusername']);

        $queryget = mysqli_query($con, "SELECT username FROM logindetails WHERE username='$user'") or die ("Query didn't work");
        $row = mysqli_fetch_assoc($queryget);
        $oldusernamedb = ($row['username']);

        if ($oldusername == $oldusernamedb) {
            if ($newusername == $repeatnewusername) {
                $querychange = mysqli_query($con, "UPDATE logindetails SET username='$newusername' WHERE username='$user'");
                session_destroy();
                header("Location: ../../Form/login/loginPage.php?message=Your username has been successfully updated.");
                $_SESSION["name"] = $_POST ["name"];
                echo $_SESSION["name"];
                exit();
            } else
                header("Location: settingsPage.php?updateUsername=new");
            exit();
        } else
            header("Location: settingsPage.php?updateUsername=old");
        exit();
    }
    echo file_get_contents('settingsPage.php');
}
else
    die ("You must be logged in to change to your username");
?>
