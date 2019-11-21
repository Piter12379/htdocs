<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <title> </title>
</head>
<body>
  <form action="switch.php" method="post">
    <input type="text" name="wich"/>
  </form>
<?php

  $wich = @$_POST['wich'];
  switch($wich)
  {
  case 17: print "masz 17lat";
  break;
  case 18: print "Masz 18lat";
  break;
  case 19: print "Masz 19lat";
  break;
  case 20: print "Masz 20lat";
  break;
  default: print "nie wiem";
  }


?>
</body>
</html>
