<?php include "../konfiguracija.php";?>
<!doctype html>
<head>
	<meta charset="utf-8">
</head>

<form action="registracija.php" method="POST">
	<label for="email"> E-mail* </label>
	<input type="text" id="email" name="email" />
	<label for="accName"> Ime korisnika* </label>
	<input type="text" id="accName" name="accName" />
	<label for="lozinka"> Lozinka* </label>
	<input type="password" id="lozinka" name="lozinka" />
	<label for="potvrdilozinku"> Potvrdi lozinku* </label>
	<input type="password" id="potvrdilozinku" name="potvrdilozinku" />
	<label for="ziro_racun"> Žiro račun </label>
	<input type="text" id="ziro_racun" name="ziro_racun" />
	<button id="prijavi"> Prijavi </button>
</form>

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