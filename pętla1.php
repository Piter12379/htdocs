<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <title> </title>
</head>
<body>
<?php
/*
for($i=0;$i<7;$i++){
  if($i==3)continue;
  print $i.",";
  if($i>4)break;
}

for($i=0;$i<7;$i++){
  if($i%2==1)continue;
  print $i.",";
}
*/
$i=1;$a=0;
while($i){
  print $i++.",";
  if($i==5)continue;
  if($i>10)break;
  $a +=$i;
}
  print $i.",".$a;
?>
</body>
</html>
