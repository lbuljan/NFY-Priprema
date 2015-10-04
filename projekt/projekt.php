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
<hr class="hrprojekt" />

<div class="row">
<div class="col-md-6">
<div class="imeprojekta">
<h1> Ime projekta</h1><div>by <a href="">user_name</a></div>

<hr />
</div>

<div style="margin-left:75px;">
<strong style="color:red;">
Status</strong><br />
<div style="margin-left:80px;margin-top:10px;font-size:18px;">
<img src="<?php echo $put;?>slike/time.png" style="max-width:20px;"/> 
13d:2h:3m:20s
<img src="<?php echo $put;?>slike/users.png" style="max-width:20px;margin-left:50px;"/> 200
</div>
</div>
<div class="progress">
  <div class="progress-bar progress-bar-danger progress-bar-striped active" role="progressbar"
  aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:70%">
 
  </div>

</div>
 <div style="margin-top:-20px;"><div style="margin-left:75px;">0kn</div><div style="margin-left:520px;margin-top:-20px;">5 000kn</div></div>
<div class="btnholder"><button class="btn btn-default1" style="color:white;" type="submit">Financiraj</button></div>
<hr style="  margin-left: 75px;width: 500px;color: black;border-color: black;"/>

<div style="margin-left:75px;margin-top:-10px;">
	tag1, tag3, tag3
<img src="<?php echo $put;?>slike/etiketa.png" style="max-width:20px;margin-left:40px;"/> 
umjetnost
<img src="<?php echo $put;?>slike/lokacija.png" style="max-width:20px;max-height:20px;margin-left:40px;"/> 
Zagreb, Hrvatska
</div>

<a href="" style="margin-left:530px;">uredi</a>


</div>
<div class="col-md-6">
<div id="carousel" class="carousel slide">
	<ol class="carousel-indicators">
		<li data-target="#carousel" data-slide-to="0" class="active"></li>
		<li data-target="#carousel" data-slide-to="1"></li>
		<li data-target="#carousel" data-slide-to="2"></li>


	
	</ol>
	<div class="carousel-inner">
		<div class="item active">
			<img src="<?php echo $put ?>slike/maca.png" alt="" class="img-responsive" />
		</div>
		
		<div class="item">
			<img src="<?php echo $put ?>slike/maca.png" alt="" class="img-responsive" />
		</div>
		
		<div class="item">
			<img src="<?php echo $put ?>slike/maca.png" alt="" class="img-responsive" />
		</div>
		
		
		
			
	</div>
	<a class="carousel-control left" href="#carousel" data-slide="prev">
		<span class="icon-prev"></span>
	</a>
		<a class="carousel-control right" href="#carousel" data-slide="next">
		<span class="icon-next"></span>
	</a>
</div>

</div>

</div>

<div class="row">
<div class="col-md-12">
<div class="opis">
<h1>Detaljan opis<a href="">uredi</a></h1>

Projekt je vremenski određena aktivnost s ciljem da se proizvede jedinstven proizvod, usluga ili rezultat.

Za razliku od operacija, koje su neprekidne i mogu se ponavljati, projekti su vremenski ograničeni i jedinstveni. Projekti se poduzimaju na svim razinama organizacije i mogu uključivati od jedne osobe do više tisuća osoba u nekoliko različitih timova.
Osnovna razlika između projekta i operacije je u tome što su operacije neprekidne i mogu se ponavljati, a projekti su vremenski ograničeni i jedinstveni. Svrha im je također različita. Namjera projekta je postići zadane ciljeve i završiti. Svrha operacije je podupiranje i održanje poslovanja, čak i kada se ciljevi promijene.
</div>
<p style="float:right;margin-right:75px;margin-top:20px;"><img src="<?php echo $put;?>slike/share.png" style="max-width:20px;max-height:20px;"/> Share</p>

</div>
</div>

<div class="row">
<div class="col-md-12">
<div class="komentari">
<h1>Komentari</h1>

<hr />
<h5>osoba123</h5>

<p>komentar komentar komentarišem</p>




<h5>osoba123</h5>

<p>komentar komentar komentarišem</p>

<center style="color:black;"><a href="">see more</a></center>
<center style="margin-top:50px;"><button class="btn btn-default1" style="color:white;" type="submit">Financiraj</button></center>

</div>
</div>
</div>

 <script>
            $("#carousel").carousel();
        </script>



<?php 	
include_once '../footer.php'; 
?>


</body>
</html>