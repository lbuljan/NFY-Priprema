<?php
include '../konfiguracija.php';
$registriraj = $con->prepare("insert into operater (email, accName, lozinka, ziro_racun) values (:email, :accName, :lozinka, :ziro);");
$registriraj->bindParam(":email", $_POST["email"]);
$registriraj->bindParam(":accName", $_POST["accName"]);
$registriraj->bindParam(":lozinka", md5($_POST["lozinka"]));
$registriraj->bindParam(":ziro", $_POST["ziro"]);
$registriraj->execute();
$id=$con->lastInsertId();
//preusmjeri na korisnikovu stranicu profila
header("location: profil.php?u=$id");
?>