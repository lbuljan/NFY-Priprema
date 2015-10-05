<?php 	include_once '../konfiguracija.php'; 

$projekti = $con->prepare("select * from projekt inner join galerija on projekt.sifra=galerija.projekt ");
$projekti->bindValue(":operater", $_SESSION["autoriziran"]);
$projekti->execute();
$projects = $projekti->fetchAll(PDO::FETCH_OBJ);			
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

<p style="text-align:center;font-size:50px;margin-bottom:50px;">Projekti</p>

<div class="row">
<?php foreach($projects as $pro):?>
	<div class="col-md-4">
		<div class="uspj">
			<a href="<?php echo $put;?>projekt/projekt.php?p=<?php echo $pro->sifra;?>">
				<img src="<?php echo $put . $pro->naslovna; ?>" alt="<?php echo $pro->naziv;?> - naslovna" class="uspj1" />
			</a>
			<p><?php echo $pro->kratki_opis;?></p>
			
			<?php
				$prikupljeno = $con->prepare("select SUM(iznos) from uplata where projekt=:projekt;");
				$prikupljeno->bindValue(":projekt", $pro->sifra);
				$prikupljeno->execute();
				$sum = $prikupljeno->fetch(PDO::FETCH_NUM);
			?>
			<h2 style="text-align: center;"> <?php echo $sum[0];?> / <?php echo $pro->cilj;?> </h2>
		</div>
	</div>
<?php endforeach;?>
</div>

<?php 	
include_once '../footer.php'; 
?>


</body>
</html>