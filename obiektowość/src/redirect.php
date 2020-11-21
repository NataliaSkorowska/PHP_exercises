<?php

session_start();

$_SESSION['kwota']=$_POST['kwota'];
$_SESSION['okres']=$_POST['okres'];

header("Location: form.php");
exit;
?>