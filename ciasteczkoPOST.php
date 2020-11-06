<?php
$nazwaCiasteczka = "imie";

if($_POST(['zatwierdz']))
{
$wartoscCiasteczka = urlencode($_REQUEST['imie']);
}

setcookie($nazwaCiasteczka,$wartoscCiasteczka,time() + (86400 *1)
,"/");

header("Location" . $_SERVER['HTTTP_REFER']);
?>