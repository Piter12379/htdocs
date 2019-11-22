<?php
header('Content-type: text/html; charset=utf-8');
class sqle{
private $host="localhost";
private $port=3306;
private $socket="";
private $user="root";
private $password="";
private $dbname="test";
private $conn;
function __construct(){
$polaczenie = new mysqli($this->host, $this->user, $this->password, $this->dbname, $this->port, $this->socket)
or die ('Could not connect to the database server'. mysqli_connect_error());
mysqli_set_charset($polaczenie,"utf8");
$this->conn=$polaczenie;
}
function checkLogin($login,$haslo){
//print "$login, $haslo<br>";
$query="SELECT user_id FROM users
    WHERE login='$login'
    AND haslo='$haslo'";
if ($result = $this->conn->query($query))
{
  while ($row = $result->fetch_assoc())
  {
    $result->free();
    //printf ("user_id=%s \n", $row["user_id"]);
    return $row['user_id'];
  }
} else return false;
}
function getName(){
  $id = $_SESSION['user_id'];
  $query = "select full_name from users where user_id = $id";
  if ($result = $this->conn->query($query))
  {
    while ($row = $result->fetch_assoc())
    {
      $result->free();
      //printf ("user_id=%s \n", $row["user_id"]);
      return $row['full_name'];
    }
  } else return false;
  }
function __destruct(){
$this->conn->close();
}
}
?>
