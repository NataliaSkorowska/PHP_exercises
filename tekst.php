div class="flex flex-row flex-wrap w-full justify-center font-bold text-3xl mb-2">
  Tekst
</div>
<div class="flex flex-row flex-wrap w-full justify-center text-xl mb-2">
  <?php
  $tekst = "Programowanie w PHP";
  echo strlen($tekst);
  echo ('</br>');

  $zleSformatowanyTekst = "Programowanie w PhP";
  echo strtolower($zleSformatowanyTekst);
  echo('</br>');
  echo strtoupper($zleSformatowanyTekst);
  echo('</br>');

  $krotkitekst = "kasztan";
  echo str_repeat($krotkitekst,5);
  echo('</br>');

  $dlugitekst = "dziobak";
  echo str_repeat($dlugitekst,15);
  echo('</br>');

  $tekstdoowdrocenia = "tekst";
  echo strrev($tekstdoowdrocenia);
  echo('</br>');

  $tekstdomieszania = "Do pomieszania";
  echo str_shuffle($tekstdomieszania);
  echo('</br>');

  $tekstdowybrania = "Pierwsza czesc, druga czesc";
  echo substr($tekstdowybrania,16,20);
  echo('</br>');

  ?>
</div>