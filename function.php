<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <title> </title>
</head>
<body>
<form action="function.php" method="post">
  Wpisz a:<input type="text" name="a">
  Wpisz b:<input type="text" name="b">
  <input type="submit">
</form>
<?php
$a = $_POST['a'];
$b= $_POST['b'];
suma($a,$b);
iloraz($a,$b);
iloczyn($a,$b);
roznica($a,$b);

function suma($a,$b){
  printf("Suma: %d<br>", $a+$b);
}
function iloczyn($a,$b){

  printf("<br>iloczyn: %d", $a*$b);
}
function roznica($a,$b){
  printf("<br>Różnica: %d", $a-$b);
}
function iloraz($a,$b){
  if($a>0&&$b>0){
  printf("Iloraz: %d", $a/$b);
}else{
  print "nie mozna mniej niz zero ani zero";
}
  }

?>
</body>
</html>
