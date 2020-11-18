<?php

$cookiename = 'imie';

if (isset($_COOKIE [$cookiename]))
{
    echo 'Istnieje ciasteczko o nazwie ';
    echo $cookiename . '</br>';
}
else 
{
    echo "Nie istnieje ciasteczko o nazwie ";
    echo $cookiename.'</br>';
    echo 'Wartość: '. ($_COOKIE[$cookiename]);
    echo '</br>';
}
?>