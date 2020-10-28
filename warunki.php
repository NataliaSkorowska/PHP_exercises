<?php

 $liczba = 8;
  if ($liczba < 10)
  {
      echo ("True"). "<br>";
  }
  
  else 
  {
  echo ("False") . "<br>";
  }
  $liczbainna = 10;

  if ($liczbainna == 10)
  {
      echo ("Równe 10") . "<br>";
  }
  else if ($liczbainna < 10)
  {
      echo ("Mniejsze od 10") . "<br>";
  }
  else if ($liczbainna > 10)
  {
      echo ("Większe od 10") . "<br>";
  }

  $liczbaS = 9;
  
  switch ($liczbaS)
  {
      case 7:
        echo 'To ma być siedem' . "<br>";
      break;

      case 8:
        echo 'To ma być osiem' . "<br>";
      break;

      case 9:
        echo ' To ma byc dziewiec' . "<br>";
      break;
        default:
        echo 'Nie wiem co to jest' . "<br>";
      }


?>