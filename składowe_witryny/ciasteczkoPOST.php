<?php
    $cookiename = "imie";

    if($_POST['zatwierdz']) {
        $cookie_value = urlencode($_REQUEST['imie']);
    }

    setcookie($cookiename, $cookie_value, time() + (86400 * 1), "/");

    header("Location: " . $_SERVER['HTTP_REFERER']);
?>