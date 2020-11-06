<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Składowe witryny</title>
</head>
<body>
<form action="ciasteczkoPOST.php" method="POST">
    <div>
        Ciasteczko
    </div>
    <div>
        <label for="imie">Imie</label>
        <input name="imie">
    </div>
    <div>
        <button type="submit" name="zatwierdz" value="zatwierdzenie">
            Wyslij
        </button>
    </div>
</form>
<?php
include ('ciasteczko.php');
?>
<div>
</div>
<form method = "GET" action="potwierdzenieGET.php">
<!-- Dzięki temu, że dodałam atrybut action w adresie widać, że zmieniła się zawartość
na tytuł pliku, do którego trafiają te dane" -->
<div>
Metoda GET
</div>
<div>
<label for = 'imie'>imie</label>
<input name = 'imie'> 
<!-- input musi miec atrybut name, a dane przypiszą sie tam w formie klucza  -->
<!-- Niewrażliwe informacje moge przesyłać właśnie w pasku adresu
Nie tylko serwer przez formularze zbiera nasze dane ale też narzędzia analityczne, które
znajdują się na danej stronie -->
</div>
<div>
<label for = "nazwisko">nazwisko</label>
<input name =  "nazwisko">
</div>
<div>
<label for ="email">Email</label>
<input name = "email">
</div>
<div>
<button 
type = "Submit"
value = "zatwierdzenie"
name = "zatwierdź"> Wyślij </button>
</div>
<!-- Gdy na stronie wpisze te dane to znajdą się one w adresie url po kliknieciu wyslij -->
<!-- Jeśli wysyłam cokolwiek w typie get to może być wysłane tylko jako parametr
Parametry doklejają się do adresu, tak jest zawsze w przypadu geta
Aby oznaczyć, że adres będzie miał parametry pojawia się znak zapytania 
'parameter in url' -->
<!-- Po wysłaniu danych formularz się restartuje -->
</form>
<br>
<form method = "POST" action = "potwierdzeniePOST.php">
<div>
Metoda POST
</div>
<div>
<label for = 'imie'>imie</label>
<input name = 'imie'> 
</div>
<div>
<label for = 'nazwisko'>nazwisko</label>
<input name = 'nazwisko'> 
</div>
<div>
<label for = 'email'>email</label>
<input name = 'email'> 
</div>
<button 
type = "Submit"
value = "zatwierdzenie"
name = "zatwierdź"> Wyślij </button>

</form>

</body>
</html>