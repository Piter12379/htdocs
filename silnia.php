<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <title> </title>
</head>
<body>
<?php
print silnia(6);
print silniaR(6);

function silnia($n){
  $silnia = 1;
  for($i=1;$i<=$n;$i++)
    $silnia *= $i;
  return $silnia."<br>";
}
function silniaR($n,$k=1,$sil=1){
  $sil *= $k;
  $k++;
  if($k<=$n)
    $sil = silniaR($n,$k,$sil);
    return $sil;
}
?>
</body>
</html>
