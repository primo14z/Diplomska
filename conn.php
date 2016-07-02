<?php
$host="localhost";
$username="89121003";
$password="3333";
$db="is_kmeti_babic_primoz";


function db_conn()
{	
		$dbh = new PDO('mysql:host=$host;dbname=$db', $username, $password);

	}
function db_close($dbh)
{
	$dbh = null;
} //db_close
?>