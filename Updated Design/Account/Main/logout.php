<?php
session_start();
session_destroy();
header('Location: ../../Form/landing page/index.php');
?>