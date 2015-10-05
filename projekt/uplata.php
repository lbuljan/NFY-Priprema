<?php 	include_once '../konfiguracija.php';  

$stanje = $con->prepare("select wallet from operater where sifra=:u");
$stanje->bindParam(":u", $_POST["u"]);
$stanje->execute();
$wallet = $stanje->fetch(PDO::FETCH_NUM);

$iznos = $wallet[0] - $_POST["i"];
if($iznos<0){
	echo "Nedovoljno sredstava za izvršavanje uplate.";
	exit;
}else{
	$uplati = $con->prepare("insert into uplata (operater, projekt, iznos) values (:u, :p, :i);");
	$uplati->execute($_POST);
	$oduzmi = $con->prepare("update operater set wallet=:iznos where sifra=:u");
	$oduzmi->bindParam(":u", $_POST["u"]);
	$oduzmi->bindParam(":iznos", $iznos);
	$oduzmi->execute();

	echo "OK";
}

