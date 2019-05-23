<?php 
ob_start(); //Turns on output buffering
session_start();

date_default_timezone_set("America/Chicago");

//Connecting to the database
try {
		$con = new PDO("mysql:dbname=videoSite;host=localhost", "root", "");
		$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
}
catch (PDOException $e) {
		echo "Connection failed: " . $e->getMessage();
}
?>