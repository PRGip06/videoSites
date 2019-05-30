<?php 
ob_start(); //Turns on output buffering
session_start();

require_once 'dbconfig.php';

date_default_timezone_set("America/Chicago");

//Connecting to the database. ("mysql:dbname=videoSite;host=localhost", "root", "");
try {
		$con = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
		echo "connection made";
		$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
}
catch (PDOException $e) {
		echo "Connection failed: " . $e->getMessage();
}
?>