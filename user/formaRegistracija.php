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


<h1 class="login">SIGN UP</h1>
<div class="prijava">
<form action="<?php echo $put;?>user/registracija.php" method="POST">
	<input class="log" type="text" id="email" name="email" placeholder="e-mail*" />
	<input class="log" type="text" id="accName" name="accName" placeholder="ime korisnika*" />
	<input class="log" type="password" id="lozinka" name="lozinka" placeholder="lozinka*" />
	<input class="log" type="password" id="potvrdilozinku" name="potvrdilozinku" placeholder="potvrdi lozinku*" />
	<input class="log" type="text" id="ziro_racun" name="ziro_racun" placeholder="žiro račun" /><br />
	<button class="btn1 btn-default" id="prijavi" type="submit" style="margin-top:10px;margin-bottom:20px"> Sing up! </button>
</form>
</div>
<div class="registriraj">
Već ste registrirani? <br/>
<button class="btn1 btn-default" id="prijavi" type="submit" style="margin-top:15px;margin-bottom:20px;"><a href="<?php echo $put ?>user/formaPrijava.php" style="color:#d6d6d5;text-decoration:none;">Login</a></button>
</div>

<?php include "../js/skripte.php";?>

<script>
	$("#prijavi").click(function(){
		
		var email=$("#email").val();
		var accName=$("#accName").val();
		var lozinka=$("#lozinka").val();
		var potvrdilozinku=$("#potvrdilozinku").val();
		var ziro_racun = $("#ziro_racun").val();
		
		if(email == "" || accName=="" || lozinka=="" || potvrdilozinku==""){
			alert("Polja označena sa zvjezdicom moraju biti ispunjena");
			return false;
		}
		if(lozinka != potvrdilozinku){
			alert("Lozinka se ne podudara s ponovljenom lozinkom");
			return false;
		}		
	})
</script>

<?php 	
include_once '../footer.php'; 
?>


</body>
</html>