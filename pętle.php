<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <title> </title>
</head>
<body>


<?php

$switch = 18;
if($switch == 18){
  print "Jesteś pełnoletni";
}else if($switch > 18){
  print "jesteś stary";
}
else{
  print "jesteś niepełnoletni";
}

$wiek = 30;
if($wiek <=5 || $wiek>= 80){
  print "<br>pieluchy czekają";
}else {
  print "<br>Leć do toalety";
}

?>
</body>
</html>
