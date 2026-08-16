<?php
$title          = "Contact";
$HeaderIntro    = "";
include 'Init.Php';
$b=-1;
if (!empty($_POST))
{
if ((isset($_POST['email']))&&(isset($_POST['objet']))&&(isset($_POST['message'])))
{
if(((!empty($_POST['email']))&&(!empty($_POST['objet']))&&(!empty($_POST['message']))))
{
$email   = $_POST['email'];
$objet   =$_POST['objet'];
$message = $_POST['message'];
$req="INSERT INTO contact(Emeteur, Destinataire, objet, message) VALUES ('".$email."','Admin', '".$objet."', '".$message."')";
$res=$conn->query($req);
$b=1;
}
else
{
if (isset($_POST['email']))
{
$email   = $_POST['email'];
}
if (isset($_POST['objet']))
{
$objet   =$_POST['objet'];
}
if (isset($_POST['message']))
{
$message = $_POST['message'];
}
$b=2;
}
}
}
?>
<div class='search-overlay rubberBand' <?php if ($b==1) { echo 'style="display: block;"'; } elseif ($b==2) { echo 'style="display: block;"'; } else { echo ''; } ?>>
<a class='toggle-search'><i class='fa fa-close'></i></a>
<div class='<?php if ($b==1) { echo 'suc'; } elseif ($b==2) { echo 'echec'; } else { echo ''; } ?>'><?php if ($b==1) { echo 'Votre Message Est Envoyé'; } elseif ($b==2) { echo 'Remplir Tous Les Champs!'; } else { echo ''; } ?></div>
</div>
<div id="wrap">
<div class="container-fluid intro-header">
<div class="row">
<div class="col-lg-12 text-center">
<h2>Nous Contacter</h2>
<hr class="colored">
</div>
</div>
<div class="row content-row">
<div class="col-lg-6 col-lg-offset-3">
<form name="sentMessage" method="post" action="">
<div class="row control-group">
<div class="form-group col-xs-12 floating-label-form-group controls">
<label>Adresse Email</label>
<input type="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" class="form-control" placeholder="Adresse Email" id="email" name="email" value="<?php if(isset($email)) { echo $email; } ?>">
<p class="help-block text-danger"></p>
</div>
</div>
<div class="form-group col-xs-12 floating-label-form-group controls">
<label>Objet Du Message</label>
<input type="text" class="form-control" placeholder="Objet Du Message" id="objet" name="objet" value="<?php if(isset($objet)) { echo $objet; } ?>">
<p class="help-block text-danger"></p>
</div>
<div class="form-group col-xs-12 floating-label-form-group controls">
<label>Message</label>
<textarea rows="4" class="form-control" placeholder="Message" id="message" name="message"><?php if(isset($message))  { echo $message; } ?></textarea>
<p class="help-block text-danger"></p>
</div>
<div class="row">
<div class="form-group col-xs-12">
<button type="submit" class="btn btn-outline-dark">Envoyer</button>
</div>
</div>
</form>
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