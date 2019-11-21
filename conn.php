<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <title> </title>
</head>
<body>
<?php
  $conn = mysqli_connect("localhost","root","","biblioteka");
  $db_select = mysqli_select_db($conn, "biblioteka");
if (!$db_select) {
  die("Database selection failed: " . mysqli_error($conn));
}
    mysqli_set_charset($conn, "utf-8");
    if(!$conn) die("Connection failed!");
    print "Connected successfully";

    $sql = "select * from autorzy";
    $result = mysqli_query($conn, $sql);

    while($wiersz=mysqli_fetch_array($result)){
      print $wiersz[0].". ".$wiersz[1];
    }

    print_r ($result)."<hr>";
    print "Ilość wierszy: ". mysqli_num_rows($result)."<br>";
    print "Ilość pól: ".mysqli_num_fields($result)."<hr>";

    for($i=0;$i<mysqli_num_rows($result);$i++){
      $wiersz = mysqli_fetch_row($result);
      print $i.". ".$wiersz[0];
      print $wiersz[0].". ".$wiersz[1].", ";
    }

    print "<hr>";


  mysqli_close($conn);
?>
</body>
</html>
