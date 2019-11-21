<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <title> </title>
</head>
<body>
<?php
class dzialania{
  public function __construct(){
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

?>
</body>
</html>
