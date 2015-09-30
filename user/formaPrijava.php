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
	<button class="btn1 btn-default" id="prijavi" type="submit" style="margin-top:10px;margin-bottom:20px"> Prijavi </button><br />
	<a href="" style="text-decoration:underline;color:black;">Zaboravili ste lozinku?</a>
</form>
</div>
<div class="registriraj">
Niste registrirani? <br/>
<button class="btn1 btn-default" id="prijavi" type="submit" style="margin-top:15px;margin-bottom:20px;"><a href="<?php echo $put ?>user/formaRegistracija.php" style="color:#d6d6d5;text-decoration:none;">Sign up!</a></button>
</div>


<?php 	
include_once '../footer.php'; 
?>


</body>
</html>