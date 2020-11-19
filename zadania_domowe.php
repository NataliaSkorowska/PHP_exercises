<div class="flex flex-row flex-wrap w-full justify-center font-bold text-3xl mb-2">
  Zadania domowe Natalia Skórowska
</div>
<div class="flex flex-row flex-wrap w-full justify-center text-xl mb-2">
  <?php

  #Zadanie 5

  $imiona=['Jan','Monika','Dominik','Patryk'];
  natcasesort( $imiona);
  echo "Rezultat użycia natcasesort: ";
  print_r($imiona);
  echo "<br/>";
  echo('</br>');

  $tablicaLiczbowa=[1,2,4,9,8,7,6];
  echo ("Użycie rsort: ");
  rsort($tablicaLiczbowa);
  print_r($tablicaLiczbowa);
  echo('</br>');

  echo ("Użycie shuffle: " );
  shuffle($tablicaLiczbowa);
  print_r($tablicaLiczbowa);
  echo('</br>');
  echo('</br>');

  #Zadanie 6

  $owoce = array('a' => 'ananas', 'b' => 'banan', 'c' => 'cytryna');
  $warzywa = array('m' => 'marchew', 'z' => 'ziemniak');

  print_r(array_merge($owoce,$warzywa));
  echo('</br>');
  echo('</br>');

   
$male= ['wszytkie', 'te', 'slowa', 'sa', 'wielkimi', 'literami'];
function cube($arg)
{   
    echo(strtoupper($arg);
}
$duze = array_map("cube", $male);
print_r($male);male)

echo('</br>');

#Zadanie 4

$tekstDozmiany = 'cytryna';
echo str_replace('cytryna', ' ', 'kiwi');
echo('</br>');

$str = "Ten tekst może być naprawdę długi jeśli chcesz";
echo wordwrap($str,15,"<br>\n");

  ?>
</div>