<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <title>Portal ogłoszeniowy</title>
  <link rel="stylesheet" type="text/css" href="style11.css" >
</head>
<body>

<div class="baner">
  <h1>Portal Ogłoszeniowy</h1>
</div>
<div class="panel-prawy">
  <h2>Ogłoszenia kategorii książki</h2>
  <ol>
  <h3><li><?php echo autor("Select tytul from ogloszenie"); ?></li>
  Biografia Daniela Craiga, niedrogo sprzedam

  <li>Selekcja</li>
  Sprzedam "Selekcja"J.Kellermanna, Niezniszczona

  <li>Buick</li>
  Sprzedam horror Stephena Kinga w dobrym stanie

  <li>Tytus, Romek i Atomek</li>
  Ks.IV do sprzedania, stan dobry
</ol></h3>

  <?php
    $conn = mysqli_connect('localhost', 'root', '', 'ogloszenia');

    mysqli_set_charset($conn, "utf-8");
    $sql = "select telefon from uzytkownik";
    $result = mysqli_query($conn, $sql);
    $sql1 = "Select tytul from ogloszenie";
    function autor($sql1){
      $resule = mysqli_query($conn, $sql1);
      while($wiers=mysqli_fetch_array($resule)){
        print $wiers[0];
      }
    }

    while($wiersz=mysqli_fetch_array($result)){
      print "<p>Telefon kontaktowy: ". $wiersz[0]."</p>";
    }
    mysqli_close($conn);
  ?>
</div>
<div class="panel-lewy">
  <h2>Kategorie Ogłoszeń</h2>
<ol class="list">
  <li>Książki</li>
  <li>Muyzka</li>
  <li>Filmy</li>
</ol>

<img src="ksiazki.jpg" alt="Kupię / Sprzedan książkę">
<table>
  <tr>
    <td>Liczba ogłoszeń</td><td>Cena ogłoszenia</td><td>Bonus</td>
  </tr>
  <tr>
    <td>1 - 10</td><td>1 PLN</td><td rowspan="3">Subksrypcja newslettera to upust 0,20 PLN na ogłoszenie</td>
  </tr>
  <tr>
    <td>11 - 50</td><td>0,80 PLN</td>
  </tr>
  <tr>
    <td>51 i więcej</td><td>0,60 PLN</td>
  </tr>
</table>
</div>



<div class="stopka">
Portal ogłoszeniowy opracował: PJeter</div>



</body>
</html>
