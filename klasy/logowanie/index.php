<!doctype html>
<html>
<head>
	<meta charset="utf-8" />
	<title> stronka </title>
</head>
<body>

<?php
session_start();
include "sqle.php";

if(isset($_POST['logout'])){
	print "<font color=\"red\">Brak dostępu</font><br><br>";
	session_unset();
	session_destroy();
}
if(isset($_POST['login']))
{
	$sql = new sqle();
	$response=$sql->checkLogin($_POST['login'],md5($_POST['haslo']));
	if($response)
		$_SESSION['user_id']=$response;
}
if(!isset($_SESSION['user_id']))
{
	print "<font color=\"red\">Brak dostępu</font>";
	print "<form action=\"index.php\" method=\"POST\">";
	print "<br><input type=\"text\" name=\"login\"><br>";
	print "<br><input type=\"password\" name=\"haslo\"><br>";
	print "<br><input type=\"submit\">";
	print "</form>";
}
else
{
	$sql = new sqle();
	$name = $sql->getName();
	print "<h1>witaj $name</h1>";
	print "<h2>udało Ci się zalogować</h2>";
}
	print "<hr>";
	print "<form action=\"index.php\" method=\"POST\">";
	print "<br><input type=\"hidden\" name=\"logout\">";
	print "<br><input type=\"submit\" value=\"wyloguj się\">";
	print "</form>";

?>

</body>
</html>
