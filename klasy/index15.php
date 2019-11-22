<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <title> </title>
</head>
<body>
<?php
include "klasy.php";

$dzial = new dzialania();
echo $dzial -> autor;

$dzial -> autor = "szymon";
print "<br>".$dzial->autor;

print "<br>Dodawanie: ".$dzial -> dodaj(5,66);

print "<br>Odejmowanie: ".$dzial -> odejmij(55,6);

//$dzial -> liczba = 5;
$dzial -> setliczba(5);
print "<br>czyParzysta: ".$dzial -> czyParzysta();

print "<br>Getliczba: ".$dzial -> getliczba();
?>
</body>
</html>
