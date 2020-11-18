<?php
$value = 'nazwisko';

if (empty($_SESSION[$value]))
 {
    echo ('Pole o nazwie nazwisko nie jest ustawione');
 }
else 
{
    echo "Istnieje pole o nazwie ". $_SESSION[$value];
    echo '</br>';
}
?>
