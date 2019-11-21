<!doctype html>
<html>
<head></head>
<body>
  <form action="form.php" method="post">
    <label>kod na nieśmiertelność </label><input type="text" width="50px" height="10px" name="nazwa" />
    <label></label><input type="checkbox">
    <input type="hidden" name="ukryty" value="test">
    <input type="submit">
  </form>

<?php
  //print_r($_post);

  $nazwa = $_POST['nazwa'];
  $ukryty = $_POST['ukryty'];
  print $nazwa." ".$ukryty;




?>


<body>
</html>
