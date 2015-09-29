<?php

$server="localhost";
$baza="CF";
$user="root";
$pass="000000";
$put="/NFY-Priprema/";

$con = new PDO("mysql:dbname=" . $baza . 
		";host=" . $server . 
		"", 
			$user, $pass);
$con->exec("SET CHARACTER SET utf8");
$con->exec("SET NAMES utf8");

session_start();
