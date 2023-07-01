<?php session_start();

// Unset the session variable
unset($_SESSION['username']);

// Redirect to HomePage.php
header('Location: index.php');
exit();
?>
