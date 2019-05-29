<?php 
ob_start(); //Turns on output buffering
session_start();

date_default_timezone_set("America/Chicago");

//Connecting to the database
try {
		$con = new PDO("mysql:dbname=videoSite;host=127.0.0.1", "root", "");
		$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
}
catch (PDOException $e) {
		echo "Connection failed: " . $e->getMessage();
}
?>