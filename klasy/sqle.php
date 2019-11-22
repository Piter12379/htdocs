<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <title> </title>
</head>
<body>
<?php
header('Content-type: text/html charset: UTF-8');
class sqle{
private  $host = "localhost";
private  $part = 3306;
private  $socket = "";
private  $password = "";
private  $dbname = "test";
private  $conn;

function __construct() {
  $con = new mysqli($this->host, $this->user, $this->password, $this->dbname,$this->port, $this->socket,
    $this->dbname, $this->port, $this->socket) or die ('Could not connect to the database server'.
    mysqli_connect_error());
    mysqli_set_charset($con, "utf8");
    $this->conn=$con;
  }
  function checkLogin($login,$haslo){
	print "$login, $haslo<br>";
	$query="SELECT user_id FROM users
			WHERE login='$login'
			AND haslo='$haslo'";
	if ($result = $this->conn->query($query))
	{
		while ($row = $result->fetch_assoc())
		{
			$result->free();
			printf ("user_id=%s \n", $row["user_id"]);
			return $row['user_id'];
		}
	} else return false;
}



  function __destruct(){
    $this->conn->close();
  }
}
?>
</body>
</html>
