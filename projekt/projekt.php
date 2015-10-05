<?php 	include_once '../konfiguracija.php';  

$projekt = $con->prepare("select * from projekt inner join operater on operater.sifra=projekt.pokretac inner join galerija on galerija.projekt=projekt.sifra where projekt.sifra = :sifra;");
$projekt->bindParam(":sifra", $_GET["p"]);
$projekt->execute();
$project = $projekt->fetch(PDO::FETCH_OBJ);

$prikupljeno = $con->prepare("select SUM(iznos) from uplata where projekt=:projekt;");
$prikupljeno->bindValue(":projekt", $project->sifra);
$prikupljeno->execute();
$sum = $prikupljeno->fetch(PDO::FETCH_NUM);

$donacija = $con->prepare("select COUNT(sifra) from uplata where projekt=:projekt");
$donacija->bindValue(":projekt", $project->sifra);
$donacija->execute();
$donors = $donacija->fetch(PDO::FETCH_NUM);

$komentari = $con->prepare("select * from komentar inner join projekt on projekt.sifra=komentar.projekt inner join operater on operater.sifra=komentar.operater where komentar.projekt=:projekt order by datum desc");
$komentari->bindValue(":projekt", $project->sifra);
$komentari->execute();
$komentar = $komentari->fetchAll(PDO::FETCH_OBJ);

$tagovi = $con->prepare("select * from tag inner join projekt on tag.projekt=projekt.sifra where tag.projekt=:projekt");
$tagovi->bindValue(":projekt", $project->sifra);
$tagovi->execute();
$tag = $tagovi->fetchAll(PDO::FETCH_OBJ);

$kategorije = $con->prepare("select naziv from kategorija where sifra=:sifra");
$kategorije->bindValue(":sifra", $project->kategorija);
$kategorije->execute();
$kategorija = $kategorije->fetch(PDO::FETCH_OBJ);
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
<hr class="hrprojekt" />
<!-- XXXXXXXXXXXXXXXXX OSNOVNI PODACI XXXXXXXXXXXXXXXXX-->
<div class="row">
	<div class="col-md-6">
	<div class="imeprojekta">
		<h1> <?php echo $project->naziv;?></h1>
			<div>by
				<a href="<?php echo $put;?>user/profil.php?u=<?php echo $project->pokretac;?>">
					<?php if($project->ime && $project->prezime==NULL):?>
						<?php echo $project->ime . " " . $project->prezime;?>
					<?php else:?>
						<?php echo $project->accName;?>
					<?php endif;?>
				</a>
			</div>
		<hr />
	</div>

	<div style="margin-left:75px;">
		<strong style="color:red;">
			Status
		</strong>
	<br />
	
	<div style="margin-left:80px;margin-top:10px;font-size:18px;">
		<img src="<?php echo $put;?>slike/time.png" style="max-width:20px;"/>
		<?php echo $project->rok;?>

		<img src="<?php echo $put;?>slike/users.png" style="max-width:20px;margin-left:50px;"/> 
		<?php echo $donors[0];?>
	</div>
</div>
	
	<input type="hidden" id="prikupljeno" value="<?php echo $sum[0];?>"/>
	<input type="hidden" id="cilj" value="<?php echo $project->cilj;?>" />
	<input type="hidden" id="projekt" value="<?php echo $project->sifra;?>" />
	<input type="hidden" id="operater" value="<?php echo $_SESSION["autoriziran"];?>"/>
	
<div class="progress">
  <div id="traka" class="progress-bar progress-bar-danger progress-bar-striped active" role="progressbar"
  aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:70%">
 
  </div>

</div>
<div style="margin-top:-20px;">
	<div style="margin-left:75px;">
		<?php echo $sum[0];?> kn
	</div>
	<div style="margin-left:520px;margin-top:-20px;">
		<?php echo $project->cilj;?> kn
	</div>
</div>
<!-- XXXXXXXXXXXXXXXXX UPLATA XXXXXXXXXXXXXXXXX-->
<?php if($_SESSION["autoriziran"]!=$project->pokretac):?>
<input type="text" id="uplata" name="uplata" />kn
<div class="btnholder">
	<button id="financiraj" class="btn btn-default1" style="color:white;">
		Financiraj
	</button>
</div>
<?php else:?>
	<a href="delProject.php?p=<?php echo $project->sifra;?>"> Obriši projekt </a>
	<a href="detaljProject.php?p=<?php echo $project->sifra;?>"> Izmjeni projekt </a>
<?php endif;?>
<hr style="  margin-left: 75px;width: 500px;color: black;border-color: black;"/>
<!-- XXXXXXXXXXXXXXXXX TAGOVI I KATEGORIJA XXXXXXXXXXXXXXXXX-->
<div style="margin-left:75px;margin-top:-10px;">
	<?php 
	foreach($tag as $tag):
		echo $tag->naziv;
	endforeach;
	?>
	<img src="<?php echo $put;?>slike/etiketa.png" style="max-width:20px;margin-left:40px;"/> 
	<?php echo $kategorija->naziv;?>


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
			<img src="<?php echo $put . $project->naslovna; ?>" alt="<?php echo $project->naziv;?> - naslovna" class="img-responsive" />
		</div>
		
		<?php if($project->slika1!=NULL):?>
		<div class="item">
			<img src="<?php echo $put . $project->slika1;?>" alt="Slika 1" class="img-responsive" />
		</div>
		<?php endif;?>
		
		<?php if($project->slika2!=NULL):?>
		<div class="item">
			<img src="<?php echo $put . $project->slika2;?>" alt="Slika 2" class="img-responsive" />
		</div>
		<?php endif;?>
		
		<?php if($project->slika3!=NULL):?>
		<div class="item">
			<img src="<?php echo $put . $project->slika3;?>" alt="Slika 3" class="img-responsive" />
		</div>
		<?php endif;?>
		
		<?php if($project->slika4!=NULL):?>
		<div class="item">
			<img src="<?php echo $put . $project->slika4;?>" alt="Slika 4" class="img-responsive" />
		</div>
		<?php endif;?>
		
		<?php if($project->slika5!=NULL):?>
		<div class="item">
			<img src="<?php echo $put . $project->slika5;?>" alt="Slika 5" class="img-responsive" />
		</div>
		<?php endif;?>
		
		
		
			
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
			<h1>Detaljan opis</h1>
			<?php echo $project->detaljan_opis;?>
		</div>
		<p style="float:right;margin-right:75px;margin-top:20px;"><img src="<?php echo $put;?>slike/share.png" style="max-width:20px;max-height:20px;"/> Share</p>
	</div>
</div>
<!-- XXXXXXXXXXXXXXXXX KOMENTARI XXXXXXXXXXXXXXXXX-->
<div class="row">
	<div class="col-md-12">
		<div class="komentari">
			<h1>Komentari</h1>
			<hr />
			<textarea id="komentar"> </textarea>
			<button id="dodaj_komentar">Komentiraj</button>
			<hr/>
			<?php foreach($komentar as $kom):?>
				<h5><?php echo $kom->accName;?></h5>

				<p><?php echo $kom->komentar;?></p>
			<?php endforeach;?>

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
<?php include "../pomocno/skripte.php";?>

<script>
	var prikupljeno = $("#prikupljeno").val();
	var cilj = $("#cilj").val();
	var postotak = prikupljeno/cilj*100;
	
	$("#traka").css("width", postotak + "%").attr("aria-valuenow", postotak);
	
</script>
<!-- IZVRŠAVANJE UPLATE -->
<script>
	$("#financiraj").click(function(){
		var uplata = $("#uplata").val();
		if(!$.isNumeric(uplata)){
			alert("Potrebno je unijeti brojčanu vrijednost");
			return false;
		}
		if(uplata<0){
			alert("Unešeni iznos mora biti pozitivna brojčana vrijednost! Decimalni iznosi pišu se sa točkom!");
			return false;
		};
		var projekt = $("#projekt").val();
		var operater = $("#operater").val();
			$.ajax({
      			type: 'POST',
      			url: "uplata.php",
      			data: "i=" + $("#uplata").val() + "&p=" + projekt + "&u=" + operater,
      			dataType: 'text'
    			}).done(function(rezultat) {
    				
        			if(rezultat=="OK"){
        				
        				alert("Transakcija provedena!");
   						location.reload();
   					}else{
   						alert(rezultat);
   					}
    			});   
		return false;
	})
</script>
<!-- DODAVANJE KOMENTARA -->
<script>
	$("#dodaj_komentar").click(function(){
		var projekt = $("#projekt").val();
		var operater = $("#operater").val();
		var komentar = $("#komentar").val();
		$.ajax({
      			type: 'POST',
      			url: "dodajKomentar.php",
      			data: "k=" + komentar + "&p=" + projekt + "&u=" + operater,
      			dataType: 'text'
    			}).done(function(rezultat) {
    				
        			if(rezultat=="OK"){
        				
        				alert("Komentar dodan!");
   						location.reload();
   					}else{
   						alert(rezultat);
   					}
    			});   
		return false;
	})
</script>
</body>
</html>