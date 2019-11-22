<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <title> </title>
</head>
<body>
<?php
session_start();
include "sqle.php";

class dzialania{
  public function __construct(){
    print "<hr>";
    print "klasa zaczęła działać<hr>";
  }
  public $autor = "Piotr Paluchowski";
  private $liczba;

  public function setliczba($x)
  {
    $this -> liczba = $x;
  }
  public function czyParzysta(){
    $x=$this->liczba;
    if($x%2==0)return "Parzysta";
    return "Nieparzysta";
  }

  public function dodaj($a,$b){
    return $a+$b;
  }
  public function odejmij($a,$b){
    return $a-$b;
  }
  public function getliczba(){
    return $this -> liczba;
  }
  public function __destruct(){
    print "<hr>Zakończono pracę";
  }
}
if(isset($_POST['login'])){
  if($_POST['login']=="Piotr" && $_POST['haslo']=='eine123')
  $_SESSION['user_id'] = 1;
}

if(!isset($_SESSION['user_id'])){
  print "brak dostępu<br>";
  print "<form action=\"index15.php\" method=\"post\">";
  print "Login:<input type=\"text\" name=\"login\">";
  print "<br>";
  print "Hasło: <input type=\"password\" name=\"haslo\"><br>";
  print "<input type=\"submit\" value=\"zaloguj\">";
  print "</form>";
}else{
  print "Jesteś zalogowany";
}


?>
</body>
</html>
