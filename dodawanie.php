<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <title> </title>
</head>
<body>
<?php
/*
  $a = 5;
  $b = 7;
  printf("Suma: %d", $a+$b);
*/
$x=5;$y=3;
suma($x,$y);
suma(7,2,6);
function suma($a,$b,$c=0){
  printf("Suma: %d<br>", $a+$b+$c);
}
print "Iloczyn: ".iloczyn(7,2,3);
print "<br>Różnica: ".roznica(20,10,5);
print "<br>Iloraz: ".iloraz(70,7,5);
function iloczyn($a,$b,$c=1){
  $iloczy = $a*$b*$c;
  return $iloczy;
}
function roznica($a,$b,$c=0){
  $roznica = $a-$b-$c;
  return $roznica;
}
function iloraz($a,$b,$c=0){
  $iloraz = $a/$b/$c;
  return $iloraz;
  }

?>
</body>
</html>
