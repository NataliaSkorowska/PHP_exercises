<?php
$nazwaCiasteczka = "imie";

if (!isset ($_COOKIE[$nazwaCiasteczka]))
{
    echo "Ciasteczko o nazwie";
    $nazwaCiasteczka;
    "jest ustawione, wartosc to";
}else{
    echo "Ciasteczko o nazwie" ;
    $nazwaCiasteczka;
    "jest ustawione";
    echo "Wartość:";
     $_COOKIE [$nazwaCiasteczka];
}

?>
