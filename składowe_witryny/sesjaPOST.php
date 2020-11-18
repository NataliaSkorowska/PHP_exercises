<?php
session_start();
if($_POST['zatwierdz'])
{
    $_SESSION['nazwisko']=$_POST['nazwisko'];
}
header("Location: " . $_SERVER['HTTP_REFERER']);
?>