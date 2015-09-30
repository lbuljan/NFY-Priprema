
<?php 	include_once 'head.php';  ?>

<nav class="navbar navbar-fixed-top">
  <div class="container-fluid">

    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
       <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
 
    </div>


    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
              <li class="navbar-text"><a href="<?php echo $put ?>index.php">POČETNA</a></li>
         <li class="navbar-text"><a href="">PROJEKTI</a></li>
<li class="navbar-text"><a href="">POKRENUTI PROJEKTI</a></li>
<li class="navbar-text"><a href="">FINANCIRAJ PROJEKT</a></li>
      </ul>
	
      <ul class="nav navbar-nav navbar-right">
	  <?php if(!isset($_SESSION["autoriziran"])):?>
        <li class="navbar-text"><a href="<?php echo $put ?>user/formaRegistracija.php">SIGN UP</a></li>    
		<li class="navbar-text"><a href="<?php echo $put ?>user/formaPrijava.php">LOGIN</a></li> 
	  <?php else:?>
		<li class="navbar-text"><a href="<?php echo $put ?>user/profil.php">PROFIL</a></li>    
		<li class="navbar-text"><a href="<?php echo $put ?>odjava.php">ODJAVA</a></li>
	  <?php endif;?>
      </ul>
    </div>
  </div>
</nav>
