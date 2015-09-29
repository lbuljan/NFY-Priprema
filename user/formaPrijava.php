<?php include "../konfiguracija.php";?>
<!doctype html>
<head>
	<meta charset="utf-8">
</head>

<form action="<?php echo $put;?>prijava.php" method="POST">
	<input type="text" id="email" name="email" />
	<input type="password" id="lozinka" name="lozinka" />
	<button type="submit" id="prijavi"> Prijavi </button>
</form>

