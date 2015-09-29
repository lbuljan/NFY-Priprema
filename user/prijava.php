<?php
include '../konfiguracija.php';

$_POST['lozinka'] = md5 ($_POST['lozinka']);

$check = $con->prepare("select * from operater where email=:email and lozinka=:lozinka;");
$check -> execute($_POST);
$operater = $check -> fetch(PDO::FETCH_OBJ);

$_SESSION['operater'] = $operater->sifra;
if($operater==NULL):
	echo "ne valja";//Autorizacija nije prošla, preusmjeri na nešto - header("location: index.php?err=1");
else:
	echo "valja";//Autorizacija prošla - header("location: home.php?id=$operater->id_op");
endif;