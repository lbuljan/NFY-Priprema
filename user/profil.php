<?php 	include_once '../konfiguracija.php';  ?>
<?php 
$operater = $con->prepare("select * from operater where sifra=:sifra;");
$operater->bindvalue(":sifra", $_GET["u"]);
$operater->execute();
$user = $operater->fetch(PDO::FETCH_OBJ);

$pokrenuto = $con->prepare("select * from projekt inner join galerija on galerija.projekt=projekt.sifra where pokretac=:sifra");
$pokrenuto->bindvalue(":sifra", $_GET["u"]);
$pokrenuto->execute();
$started = $pokrenuto->fetchAll(PDO::FETCH_OBJ);

$podrzano = $con->prepare("select * from projekt inner join uplata on uplata.projekt=projekt.sifra inner join galerija on galerija.projekt=projekt.sifra where uplata.operater=:sifra");
$podrzano->bindvalue(":sifra", $_GET["u"]);
$podrzano->execute();
$supported = $podrzano->fetchAll(PDO::FETCH_OBJ);



?>
<!doctype html>
<html>
<head>
	<?php 	include_once '../head.php';  ?>
	</head>
<body>
	
	<?php 	
	include_once '../nav.php'; 
	 ?>




<img src="<?php echo $put;?>slike/naziv.png" class="naziv" />
<img src="<?php echo $put;?>slike/žarulja.png" class="zarulja" />


<img src="<?php echo $put . $user->profilna_slika;?>" class="profil" />


<div class="ime">
<?php if(isset($user->ime, $user->prezime)):?>
<h1> <?php echo $user->ime . " " . $user->prezime;?> </h1>
<?php else:?>
<h1> <?php echo $user->accName;?> </h1>
<?php endif;?>
<hr />
</div>

<div class="podaci">
email: <?php echo $user->email;?> <br />

<?php if($_GET["u"]==$_SESSION["autoriziran"]):?>
	<img src="<?php echo $put;?>slike/money_bag.png" class="moneybag" /><p class="money"><?php echo $user->wallet;?> kn</p>
<?php endif;?>

</div>
<?php if($_SESSION["autoriziran"]==$_GET["u"]):?>
	<a href="detaljProfil.php?u=<?php echo $_GET["u"];?>" class="promjena">Promjeni podatke</a>
<?php endif;?>

<div class="row">
	<div class="pk">
		<h1> Projekti korisnika</h1>
		<hr />
	</div>
	<?php foreach($started as $st):?>
	<div class="col-md-4">
		<div class="pkk">
			<img src="<?php echo $put . $st->naslovna;?>" class="pkk1" />
			<h1><?php echo $st->naziv;?></h1>
			<p><?php echo $st->kratki_opis;?></p>
		</div>
	</div>
	<?php endforeach;?>
</div>
<div class="row">
	<div class="desno">
	<div class="pk1">
		<h1> Podržani projekti</h1>
		<hr />
	</div>
	<?php foreach($supported as $sup):?>
	<div class="col-md-4">
		<div class="pkk3">
			<img src="<?php echo $put . $sup->naslovna;?>" class="pkk1" />
			<h1><?php echo $sup->naziv;?></h1>
			<p><?php echo $sup->kratki_opis;?></p>
		</div>
	</div>
	<?php endforeach;?>
	</div>
</div>



<?php 	
include_once '../footer.php'; 
?>


</body>
</html>