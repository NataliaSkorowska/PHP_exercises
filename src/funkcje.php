<div class="flex flex-row flex-wrap w-full justify-center font-bold text-3xl mb-2">
 Funkcje
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

  function funkcjazNieznanaLiczbaArgum()
  {
    $suma=0;
    $tab = func_get_args();

      foreach($tab as $i)
      {
          $suma += 1;
      }
      echo $suma;
  }

  echo "Liczba argumentów funkcji:" ." ";
  funkcjazNieznanaLiczbaArgum("Pierwszy","Drugi","Trzeci","Czwarty","Piąty");
  echo "</br>";
  echo "Liczba argumentów funkcji:" . " ";
  funkcjazNieznanaLiczbaArgum(4,"Maliny",4.7)
  ?>
  </div>