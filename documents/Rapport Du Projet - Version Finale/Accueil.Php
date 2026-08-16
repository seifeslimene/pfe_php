<?php
$title = "Accueil";
$NoConnect = "";
$HeaderIntro = "";
include "Init.Php";
?>
<div class = "intro-header acc">
<div class = "container">
<div class = "row">
<div class = "col-lg-12">
<div class = "intro-message">
<h1>Bienvenue Sur Notre Application</h1>
<br>
<h2>Gestion D'Effectif Dans Une Société Informatique</h2>
<hr class = "intro-divider">
<ul class = "list-inline intro-social-buttons">
<li>
<a href = "Login_Client.Php" class = "btn btn-default btn-lg btn-client"><span class = "network-name"><b>Client</b></span></a>
</li>
<li>
<a href = "Login_Employe.Php" class = "btn btn-default btn-lg"><span class = "network-name"><b>Employé</b></span></a>
</li>
</ul>
</div>
</div>
</div>
</div>
</div>
<footer>
<div class = "container">
<div class = "row">
<div class = "col-lg-12">
<ul class = "list-inline">
<li>
<a href = "Accueil.Php">Accueil</a>
</li>
<li class = "footer-menu-divider">&sdot;</li>
<li>
<a href = "aPropos.Php">Qui Sommes-Nous ?</a>
</li>
<li class = "footer-menu-divider">&sdot;</li>
<li>
<a href = "Contact.php">Contact</a>
</li>
</ul>
<p class = "copyright text-muted small"><span class="ges"><a href="Accueil.php">Gestion D'Effectif</a></span> &copy;<?php echo " Juin "; echo date("Y");?></p>
</div>
</div>
</div>
</footer>
<?php include $tpl . "FooterIntro.Php"; ?>