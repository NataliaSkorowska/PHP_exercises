<?php
//require_once('pozyczka/pozyczka.php');

//session_start();

/*$pozyczkaOrg = new pozyczka
(
    $_POST['imie'],
    $_POST['drugieImie'],
    $_POST['nazwisko'],
    $_SESSION['kwota'],
    $_SESSION['okres']
);

print_r($pozyczkaOrg);
echo('</br></br>');

echo $pozyczkaOrg -> wyliczOprocentowanie() . '</br>'; */

require_once('pozyczka/pozyczka.php');
require_once('pozyczka/pozyczkaSwiateczna.php');

session_start();

$pozyczkaOrg = new pozyczka
(
    $_POST['imie'],
    $_POST['drugieImie'],
    $_POST['nazwisko'],
    $_SESSION['kwota'],
    $_SESSION['okres']
);
$poczykaSwiateczna = new pozyczkaSwiateczna
(
    $_POST['imie'],
    $_POST['drugieImie'],
    $_POST['nazwisko'],
    $_SESSION['kwota'],
    $_SESSION['okres']

);

echo print_r($pozyczkaOrg);
echo '<br/><br/>';
echo print_r($poczykaSwiateczna);
echo '<br/><br/>';

echo $pozyczkaOrg -> wyliczOprocentowanie();
echo $poczykaSwiateczna -> wyliczOprocentowanie();



?>
