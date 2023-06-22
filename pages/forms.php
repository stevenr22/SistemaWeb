<?php
session_start();
if(isset($_SESSION['DBid'])==false) header("location:../index.php");
?>
