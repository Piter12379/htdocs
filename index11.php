<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
</head>
<body>
<?php
  session_start();
  if(isset($_POST['dane']))
    $_SESSION['sesyjna'] = $_POST['dane'];
    
    print $_SESSION['sesyjna']."<br>";
    print "<a href=\"index12.php\">12</a>";


?>
</body>
</html>
