<?php ob_start(); ?>



<?php 
$_SESSION['username'] = null;
$_SESSION['password'] = null;
$_SESSION['user_role'] = null;

 
header("Location:../index.php");



?>