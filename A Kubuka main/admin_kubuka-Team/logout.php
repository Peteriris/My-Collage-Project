<?php
session_start();
if(isset($_SESSION['usname']))
 {
     unset($_SESSION['usname']);
 }
session_destroy();
header('location:index.php');
?>
