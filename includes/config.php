<?php 
ob_start(); //Turns on output buffering
session_start();

date_default_timezone_set("America/Chicago");

//Connecting to the database new PDO("mysql:dbname=videoSite;host=127.0.0.1", "root", ""); 

try {
		$con = new PDO("mysql:host=localhost;dbname=videoSite", "b6e81a4aea5572", "d5bef2d0");

		$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
}
catch (PDOException $e) {
		echo "Connection failed: " . $e->getMessage();
}
?>