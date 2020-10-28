<div class="flex flex-row flex-wrap w-full justify-center font-bold text-3xl mb-2">
  Pętle
</div>
<div class="flex flex-row flex-wrap w-full justify-center text-xl mb-2">
  <?php
  
  function pierwszaFunkcja ()
  {
      echo ('Wiadomość z pierwszej funckji') ."<br>";
  }
  pierwszaFunkcja();

  function funkcjazArgumentami($imie, $nazwisko = "Nowak")
  {
      echo ($imie." ". $nazwisko). "<br>";
  }

  funkcjazArgumentami('Natalia', 'Kowalska'). "<br>";
  funkcjazArgumentami('Adam'). "<br>";

  function funckjazReferencja (&$imie)
  {
      $imie = "Ala". "<br>";
  }

  $imiedoreferencji = 'Kasia'. "<br>";
  echo $imiedoreferencji;
 
  funckjazReferencja($imiedoreferencji);
  echo $imiedoreferencji;

  function funkcjaZNieznanaLiczbaArgumentow()
  {
  $arg_list = func_get_args();
  for ($i = 0; $i < $numargs; $i++) {
      echo "Argument $i is: " . $arg_list[$i] . "\n";
  }
  
  funkcjaZNieznanaLiczbaArgumentow(1,2,3);
  ?>
</div>