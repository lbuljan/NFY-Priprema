<?php 	include_once 'konfiguracija.php';  ?>
<!doctype html>
<html>
<head>
	<?php 	include_once 'head.php';  ?>
	</head>
<body>
	
	<?php 	
	include_once 'nav.php'; 
	 ?>
	 
<img src="<?php echo $put ?>slike/banner.png" alt="Banner" style="max-width:100%;" />

<a href="<?php echo $put ?>projekt/pokreni.php"><button class="btn btn-default" id="pokreni" type="submit">Pokreni projekt!</button></a>


<div class="projekt">
	PROJEKTI
	<hr style="width:30%;border-color:black;color:black;" />
</div>

<div class="projekt">
USPJEŠNI PROJEKTI

</div>
<br /><div class="row">
<div class="col-md-4">
	<div class="uspj">
		<img src="slike/maca.png" alt="maca" class="uspj1" />
		<p>Mačak Gili meditira 23 sata na dan. Mačak je krasan i divan. Stvarno ime mu je Gilmour. Ostatak priče o njemu... <a href="projekt/projekt.php" class="read">>>Read full story</a></p>
	</div>
	
</div>
<div class="col-md-4">
	<div class="uspj">
		<img src="slike/maca.png" alt="maca" class="uspj1" />
		<p>Mačak Gili meditira 23 sata na dan. Mačak je krasan i divan. Stvarno ime mu je Gilmour. Ostatak priče o njemu... <a href="" class="read">>>Read full story</a></p>
	</div>
	
</div>
<div class="col-md-4">
	<div class="uspj">
		<img src="slike/maca.png" alt="maca" class="uspj1" />
	<p>	Mačak Gili meditira 23 sata na dan. Mačak je krasan i divan. Stvarno ime mu je Gilmour. Ostatak priče o njemu... <a href="" class="read">>>Read full story</a></p>
	</div>
	
</div>
</div>


<?php 	
include_once 'footer.php'; 
?>


</body>
</html>