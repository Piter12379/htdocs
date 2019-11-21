<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <title> </title>
</head>
<?php
 session_start();
 if(isset($_POST['dane']))
   $_SESSION['sesyjna'] = $_POST['dane'];
   print $_SESSION['sesyjna']."<br>";

?>
<body>

</body>
</html>
