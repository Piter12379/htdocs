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


    for($i=0;$i<mysqli_num_rows($result);$i++){
      $wiersz = mysqli_fetch_row($result);
      print $i.". ".$wiersz[0];
      print $wiersz[0].". ".$wiersz[1].", ";
    }
    print "<hr>";

    printf ("New record has id %d.<br>", mysqli_insert_id($conn));

    $sql = "INSERT INTO autorzy(`autor`) VALUES ('Pjeter Piotr');";
    mysqli_query($conn,$sql);
    printf ("New record has id %d.\n", mysqli_insert_id($conn));

    mysqli_free_result($result);


    print "<hr>";


  mysqli_close($conn);
?>
</body>
</html>
