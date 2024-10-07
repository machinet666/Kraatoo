<?php
function getConnection(){

	$serverName="localhost";
	$userName="root";
	$password="";
	$dbName="Kraatoo";
	$conn=new mysqli($serverName,$userName,$password,$dbName);
	return $conn;
}
?>