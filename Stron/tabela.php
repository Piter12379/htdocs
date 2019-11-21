<!DOCTYPE html>
<html lang="PL-pl">
<head>
  <meta charset="8-utf">
</head>
<body>
  <?php

    print_r($_POST);
    if(isset($_POST['procesor'])){
      $procesor = $_POST['procesor'];
    }else{
        $procesor = "";
    }


    if(isset($_POST['typ'])){
      $typ = $_POST['typ'];
    }else{
      $typ = "";
    }


    if(isset($_POST['ram'])){
      $ram = $_POST['ram'];
    }else{
      $ram = "";
    }

    if(isset($_POST['grafika'])){
      $grafika = $_POST['grafika'];
    }else{
      $grafika = "";
    }

    if(isset($_POST['dysk'])){
      $dysk = $_POST['dysk'];
    }else{
      $dysk = "";
    }

    if(isset($_POST['obudowa'])){
      $obudowa = $_POST['obudowa'];
    }else{
      $obudowa = "";
    }

    if(isset($_POST['plytka'])){
      $plytka = $_POST['plytka'];
    }else{
      $plytka = "";
    }


  ?>
<h1>FORMULARZ ZAMÓWIENIA</h1>
<table border="3px">
  <tr>
    <td align="right">Komputer</td><td align="left"><?php echo $typ ?></td>
  </tr>
  <tr>
    <td align="right">Procesor</td><td align="left"><?php  echo $procesor ?></td>
  </tr>
  <tr>
    <td align="right">Karta Graficzna</td><td align="left"><?php  echo $grafika ?></td>
  </tr>
  <tr>
    <td align="right">Płyta główna</td><td align="left"><?php  echo $plytka ?></td>
  </tr>
  <tr>
    <td align="right">Obudowa</td><td align="left"><?php echo $obudowa ?></td>
  </tr>
  <tr>
    <td align="right">Dysk</td><td align="left"><?php echo $dysk ?></td>
  </tr>
  <tr>
    <td align="right">RAM</td><td align="left"><?php  echo $ram ?></td>
  </tr>
</table>

</body>
</html>
