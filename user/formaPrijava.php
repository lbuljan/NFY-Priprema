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

<h1 class="login">LOGIN</h1>
<div class="prijava">
<form action="<?php echo $put;?>user/prijava.php" method="POST">
	<input class="log" type="text" id="email" name="email" placeholder="korisničko ime ili email" /><br />
	<input class="log" type="password" id="lozinka" name="lozinka" placeholder="lozinka" /><br />
	<button type="submit" id="prijavi"> Prijavi </button>
</form>
</div>





<?php 	
include_once '../footer.php'; 
?>


</body>
</html>