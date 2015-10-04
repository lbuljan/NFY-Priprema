<?php 	include_once '../konfiguracija.php';  ?>
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

<p style="text-align:center;font-size:50px;margin-bottom:50px;">Financiraj projekt</p>

<div class="row">
<div class="col-md-4">
	<div class="uspj">
		<img src="<?php echo $put ?>slike/maca.png" alt="maca" class="uspj1" />
		<p>Mačak Gili meditira 23 sata na dan. Mačak je krasan i divan. Stvarno ime mu je Gilmour. Ostatak priče o njemu... <a href="" class="read">>>Read full story</a></p>
	</div>
	
</div>
<div class="col-md-4">
	<div class="uspj">
		<img src="<?php echo $put ?>slike/maca.png" alt="maca" class="uspj1" />
		<p>Mačak Gili meditira 23 sata na dan. Mačak je krasan i divan. Stvarno ime mu je Gilmour. Ostatak priče o njemu... <a href="" class="read">>>Read full story</a></p>
	</div>
	
</div>
<div class="col-md-4">
	<div class="uspj">
		<img src="<?php echo $put ?>slike/maca.png" alt="maca" class="uspj1" />
	<p>	Mačak Gili meditira 23 sata na dan. Mačak je krasan i divan. Stvarno ime mu je Gilmour. Ostatak priče o njemu... <a href="" class="read">>>Read full story</a></p>
	</div>
	
</div>
</div>


<?php 	
include_once '../footer.php'; 
?>


</body>
</html>