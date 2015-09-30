
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
              <li class="navbar-text"><a href="">POČETNA</a></li>
         <li class="navbar-text"><a href="">PROJEKTI</a></li>
<li class="navbar-text"><a href="">POKRENUTI PROJEKTI</a></li>
<li class="navbar-text"><a href="">FINANCIRAJ PROJEKT</a></li>
      </ul>
     
      <ul class="nav navbar-nav navbar-right">
        <li class="navbar-text"><a href="user/formaRegistranica.php">SING UP</a></li>    
<li class="navbar-text"><a href="user/formaPrijava.php">LOGIN</a></li> 
      </ul>
    </div>
  </div>
</nav>

<img src="slike/banner.png" alt="Banner" style="max-width:100%;" />

<button class="btn btn-default" id="pokreni" type="submit">Pokreni projekt!</button>