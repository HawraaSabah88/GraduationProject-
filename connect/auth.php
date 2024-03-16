<?php

session_start();

if(!isset($_SESSION['name'])){
    header("location:../RegisterLogin/index1.php");
    exit();
}

?>



