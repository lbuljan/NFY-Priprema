<?php
include '../konfiguracija.php';

$_POST['lozinka'] = md5 ($_POST['lozinka']);

$check = $con->prepare("select * from operater where email=:email and lozinka=:lozinka;");
$check -> execute($_POST);
$operater = $check -> fetch(PDO::FETCH_OBJ);

if($operater==NULL):
	header("location: formaPrijava.php?err=1");
else:
	$_SESSION['autoriziran'] = $operater->sifra;
	header("location: ../index.php");
endif;