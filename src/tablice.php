<div class="flex flex-row flex-wrap w-full justify-center font-bold text-3xl mb-2">
  Tablice
</div>
<div class="flex flex-row flex-wrap w-full justify-center text-xl mb-2">
  <?php
  $tablica=["pierwszy","drugi","czwarty"];
 /* echo $tablica[1];
  echo('</br>');

  foreach ($tablica as $i)
  {
      echo$i;
      echo ('</br>');
  }
  print_r($tablica);
  echo('</br>');
  echo count($tablica);
  echo('</br>');

  $nowatablica = array("klucz1"=>"wartoscjakas","klucz2"=>"wartoscInna");
  echo $nowatablica["klucz2"];
  echo('</br>');
 
  $reversed = array_reverse($nowatablica);
  print_r($reversed); 
  */

  #Utwórz funkcję szukającą elementu w tablicy
  
  function sprawdzCzyJest($wartoscszukana,$tablica)
  {
    if(in_array($wartoscszukana,$tablica))
    {
      echo ("jest");
    }
    else
    {
    echo("Nie ma takiej wartości");
    }
  }
  sprawdzCzyJest("pierwszy", $tablica);
  sprawdzCzyJest("pierwsza",$tablica);

  ?>
</div>


