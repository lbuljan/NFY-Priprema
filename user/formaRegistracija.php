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

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="<?php echo $put;?>js/bootstrap.min.js"></script>
<script src="<?php echo $put;?>js/md5.js"></script>

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