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
<img src="<?php echo $put;?>slike/žarulja.png" class="zarulja" />


<img src="<?php echo $put;?>slike/slika.jpg" class="profil" />
<p class="profil1"><span>promjeni fotografiju </span></p>
<div class="ime">
<h1> Imenka Imenić</h1>
<hr />
</div>

<div class="podaci">
Zagreb, Hrvatska <br />
email: email@email.email <br />
web: web.com <br />
<img src="<?php echo $put;?>slike/money_bag.png" class="moneybag" /><p class="money">3,000 kn</p>
</div>

<a href="" class="promjena">Promjeni podatke</a>
<div class="projekti">
<div class="row">
<div class="pk">
<h1> Projekti korisnika</h1>
<hr />
</div>
<div class="col-md-4">
<div class="pkk">
<img src="<?php echo $put;?>slike/maca.png" class="pkk1" />
<h1>Ime projekta</h1>
<p>Mačak Gili meditira 23 sata na dan. Mačak je krasan i divan. Stvarno ime mu je Gilmour. Ostatak priče o njemu... <a href="" class="">see more</a></p>

</div>

</div>
<div class="col-md-4">
<div class="pkk2">
<img src="<?php echo $put;?>slike/maca.png" class="pkk1" />
<h1>Ime projekta</h1>
<p>Mačak Gili meditira 23 sata na dan. Mačak je krasan i divan. Stvarno ime mu je Gilmour. Ostatak priče o njemu... <a href="" class="">see more</a></p>

</div></div>
</div>
<div class="row">
<div class="desno">
<div class="pk1">
<h1> Podržani projekti</h1>
<hr />
</div>
<div class="col-md-4">
<div class="pkk3">
<img src="<?php echo $put;?>slike/maca.png" class="pkk1" />
<h1>Ime projekta</h1>
<p>Mačak Gili meditira 23 sata na dan. Mačak je krasan i divan. Stvarno ime mu je Gilmour. Ostatak priče o njemu... <a href="" class="">see more</a></p>

</div></div>
<div class="col-md-4">
<div class="pkk4">
<img src="<?php echo $put;?>slike/maca.png" class="pkk1" />
<h1>Ime projekta</h1>
<p>Mačak Gili meditira 23 sata na dan. Mačak je krasan i divan. Stvarno ime mu je Gilmour. Ostatak priče o njemu... <a href="" class="">see more</a></p>

</div>
</div>
</div>
</div></div>



<?php 	
include_once '../footer.php'; 
?>


</body>
</html>