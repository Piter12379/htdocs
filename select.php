<!doctype html>
<html lang="pl-PL">
<head>
  <link rel="stylesheet" href="style.css"/>
  <meta charset="8-utf">
</head>
<body>
  <form action="select.php" method="post">
Komputer: <input type="radio" name="typ[]" value="Do pracy">Do pracy
          <input type="radio" name="typ[]" value="Do gry">Do gry</br>

Procesor:  <select name="procesor[]">
    <option selected>INTEL</option>
    <option>amd</option>
</select></br>

Karta graficzna: <select name="grafika[]">
    <option selected>Radeon RX380</option>
    <option>MSI GTX1080</option>
</select></br>

Płyta główna: <select name="plytka[]">
    <option selected>MSI X570</option>
    <option>MSI H110M</option>
</select></br>

Obudowa:  <input type="radio" name="obudowa[]" value="Zalman">Zalman
          <input type="radio" name="obudowa[]" value="Silentium PC">Silentium PC
          <input type="radio" name="obudowa[]" value="Be Quiet">Be Quiet</br>

Dyski:    <input type="radio" name="dysk[]" value="SSD">SSD
          <input type="radio" name="dysk[]" value="HDD">HDD
          <input type="radio" name="dysk[]" value="M.2">M.2</br>

RAM:        <select name="ram1[]">
    <option selected>DDR3</option>
    <option>DDR4</option>
  </select>
            <select name="ram[]">
    <option selected >3200MHz</option>
    <option>3000MHz</option>
    <option>1600MHz</option>
  </select></br>
  <input type="submit">
</form>

</body>
<?php
  /* print_r($_POST['typ']);
  print_r($_POST['procesor']);
  print_r($_POST['grafika']);
  print_r($_POST['plytka']);
  print_r($_POST['dysk']);
  print_r($_POST['ram1']);
  print_r($_POST['ram']);
  print_r($_POST['obudowa']);
*/
print_r($_POST);
if(isset($_POST['procesor']))
  $procesor = $_POST['procesor'];
else
    $procesor = "";

?>

</html>
