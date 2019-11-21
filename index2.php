<html>
<head>
  <title>phpinfo</title>
</head>
<body>
  <?php
  $color = "czerwony";
  $name = "Pjeter";

  echo "Twój łeb jest " . $color . ", dokładnie";
  print "<h1><font size=\"1\">$name</h2></font>";
  print '<h2>$color</h2>';
  if($name == "Pjeter"){
    echo "<h3>Good Work!</h3>";
  }else {
    echo "sram ci na łeb";
  }
  print "Dodawanie.";
  $a=5;
  $b=10;
  $suma=$a+$b;
  print "<p>$a + $b = $suma</p>";

  print "Odejmowanie";
  $różnica=$b-$a;
  print "<p>$b - $a = $różnica</p>";

  print "Mnożenie";
  $iloraz=$a*$b;
  print "<p>$a * $b = $iloraz</p>";

  print "Dzielenie";
  $iloczyn=$a/$b;
  print "<p>$a / $b = $iloczyn</p>";
    ?>
</body>
</html>
