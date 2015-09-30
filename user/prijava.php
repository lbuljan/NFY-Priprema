<?php
include '../konfiguracija.php';

$_POST['lozinka'] = md5 ($_POST['lozinka']);

$check = $con->prepare("select * from operater where email=:email and lozinka=:lozinka;");
$check -> execute($_POST);
$operater = $check -> fetch(PDO::FETCH_OBJ);

$_SESSION['operater'] = $operater->sifra;
if($operater==NULL):
	header("location: ../index.php?err=1");
else:
	header("location: index.php");
endif;