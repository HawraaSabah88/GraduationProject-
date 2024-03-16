

<?php


session_start();
$conn =mysqli_connect("localhost","root","","info");
session_destroy();
header('Location: ../index.php');
/*
session_start();
session_destroy();
//echo 'You have been logged out. <a href="/">Go back</a>';
header('Location: ../index.php');


unset($_SESSION["id"]);
unset($_SESSION["emailf"]);
header('Location: ../index.php');*/
?>

<?php







