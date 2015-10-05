<?php 	include_once '../konfiguracija.php';  

$dodaj = $con->prepare("insert into komentar (operater, projekt, komentar, datum) values (:u, :p, :k, now());");
$dodaj->bindParam(":u", $_POST["u"]);
$dodaj->bindParam(":p", $_POST["p"]);
$dodaj->bindParam(":k", $_POST["k"]);
$dodaj->execute();
echo "OK";


