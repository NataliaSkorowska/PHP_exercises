?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://unpkg.com/tailwindcss@1.8.10/dist/tailwind.css" rel="stylesheet">
</head>
<div>
</div>
<body>
<div class =" py-16 px-12 m-16 flex flex-col items-center justify-center max-w-lg max-w-xs bg-blue-300 shadow-3x2 rounded-lg mx-auto text-center rounded-xl">
<form method = "GET" action = 'potwierdzenieGET.php'>
<h1 class="text-3xl font-bold text-blue-800 mb-2">METODA GET</h1>
<br>
<div>
   <input placeholder = 'Imie' name = 'imie'
   class="shadow appearance-none  rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
   <label for='imie'></label>
   </div>
   <br>
   <div>
   <input placeholder = 'Nazwisko'name= 'nazwisko'
   class=" rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
   <label for = 'nazwisko'></label>
   </div>
   <br>
   <div>
   <input placeholder = 'Email' name = 'email'
   class="shadow appearance-none  rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
   <label for = 'email'></label>
   </div>
<br>
   <button type='submit' class = "bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">WYŚLIJ</button>
   <br>
   </form>
   </div>
   <form method  = "POST" action= 'potwierdzeniePOST.php'>
   <div class =" py-16 px-12 m-16 flex flex-col items-center justify-center max-w-lg max-w-xs bg-blue-300 shadow-3x2 rounded-lg mx-auto text-center rounded-xl">
   <h1 class="text-3xl font-bold text-blue-800 mb-5">METODA POST</h1>
   <div>
   <label for = 'imie' class="block text-blue-800 text-sm font-bold mb-1 ">Imie</label>
   <input name = 'imie' class='bg-white h-8 px-2 pr-3 rounded-full' >
   </div>
   <br>
   <div>
   <label for = 'nazwisko' class="block text-blue-800 text-sm font-bold mb-1 ">Nazwisko</label>
   <input name = 'nazwisko' class='bg-white h-8 px-2 pr-3 rounded-full'>
   </div>
   <br>
   <div>
   <label for = 'email' class="block text-blue-800 text-sm font-bold mb-1">Email</label>
   <input name = 'email' class='bg-white h-8 px-2 pr-3 rounded-full mb-4'>
   </div>
   <button type = 'submit' name ="zatwierdz" value = "zatwierdzanie"
   class='bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline'>Wyślij</button>
   </form>
   </div>
   <div class =" py-16 px-12 m-16 flex flex-col items-center justify-center max-w-lg max-w-xs bg-blue-300 shadow-2x1 rounded-lg mx-auto text-center rounded-xl">
   <form method = 'POST' action = 'ciasteczkoPOST.php'>
   <h1 class="text-3xl font-bold text-blue-800 mb-2">CIASTECZKO</h1>
   <div>
   <input name = 'imie' placeholder = 'Imie' class="shadow appearance-none border rounded py-2 px-3 text-grey-darker">
   <label for = 'imie' >  </label>
   <button class='bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-2 rounded-r-lg focus:outline-none focus:shadow-outline'
    type = 'submit' name ="zatwierdz" value = "zatwierdzanie">zatwierdz</button>
    <br>
    <?php
    include ('ciasteczko.php');
    ?>
   </div>
   </form>
   </div>
<div class =" py-16 px-12 m-16 flex flex-col items-center justify-center max-w-lg max-w-xs bg-blue-300 shadow-3x2 rounded-lg mx-auto text-center rounded-xl">
<form method = "POST" action ='sesjaPOST.php'>
<h1 class="text-3xl font-bold text-blue-800 mb-2">SESJA</h1>
<input placeholder = 'Nazwisko' name = 'nazwisko'  class="shadow appearance-none border rounded py-2 px-3 mb-4 text-grey-darker">
<label for = 'nazwisko'></label>
<div>
<button type='submit' value = 'zatwierdzanie' name = 'zatwierdz' class = "bg-blue-500 hover:bg-blue-700 
text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">WYŚLIJ</button>
<br>
<?php
include('sesja.php');
?>
</div>
</form>
</div>
</body>
</html>



