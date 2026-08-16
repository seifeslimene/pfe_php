<?php
$title        = "Qui Somme-Nous?";
$HeaderIntro  = "";
$NoConnect    = "";
include 'init.php'
?>
<div id="wrap">
<div class="apro intro-header aprop">
<div class="row1">
<div class="intro-message">
<h1>Qui Sommes Nous</h1>
<hr class="intro-divider1">
</div>
</div>
<div class="row">
<div class="thumbnail1 p2 col-lg-6">
<div class="tr1">
<img class="img-thumbnail" src="Layout/Images/P2.jpg">
<div class="caption1">
<h3>Mohamed Karkeni</h3>
<p><a href="https://www.facebook.com/KarkeniMohamed" class="btn btn-primary" target="_blank">Facebook</a> <a href="https://www.twitter.com/MohamedKarkeni" class="btn btn-default" target="_blank">Twitter</a></p>
</div>
</div>
</div>
<div class="thumbnail1 p1 col-lg-6">
<div class="tr2">
<img class="img-thumbnail" src="Layout/Images/p1.jpg">
<div class="caption1">
<h3>Seif Eddine Slimene</h3>
<p><a href="https://www.facebook.com/Seifslimene" class="btn btn-primary" target="_blank">Facebook</a> <a href="https://www.twitter.com/kingsaifanov" class="btn btn-default" target="_blank">Twitter</a></p>
</div>
</div>
</div>
</div>
</div>
<footer>
<div class="container">
<div class="row">
<div class="col-lg-12">
<ul class="list-inline">
<li>
<a href="Accueil.Php">Accueil</a>
</li>
<li class="footer-menu-divider">&sdot;</li>
<li>
<a href="aPropos.Php">Qui Sommes-Nous ?</a>
</li>
<li class="footer-menu-divider">&sdot;</li>
<li>
<a href="Contact.php">Contact</a>
</li>
</ul>
<p class="copyright text-muted small"><span class="ges"><a href="Accueil.php">Gestion D'Effectif</a></span> &copy; <?php echo "Juin "; echo date("Y");?></p>
</div>
</div>
</div>
</footer>
</div>
<?php include $tpl . "FooterIntro.Php"; ?>