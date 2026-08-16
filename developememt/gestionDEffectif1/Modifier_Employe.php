<?php
include 'Config.php';
if(isset($_GET['id_employe']))
{
 if(!empty($_GET['id_employe']))
 {
  $id_employe = $_GET['id_employe'];
  $req_c = "select p.*,MATRICULE,REFPERSONNEE from employe as e JOIN personne as p where p.ID = e.REFPERSONNEE AND e.ID=".$id_employe ;			
  $res = $conn->query($req_c);
  $clt =array();
  while($r = $res->fetch_assoc())
  {    
   $clt=$r;
  }
  $nom 		        = $clt['Nom'];
  $prenom 	        = $clt['Prenom'];
  $datenais 	    = $clt['datenaissance'];
  $email 	        = $clt['email'];
  $adresse 	        = $clt['adresse'];
  $cin 		        = $clt['cin'];
  $matriculee       = $clt['MATRICULE'];
  $idpersonne       = $clt['REFPERSONNEE'];
  $e = array();
  if(isset($_POST))
  {
   if(!empty($_POST))
   {
	$nom 		      = $_POST['Nom'];
	$prenom 	      = $_POST['Prenom'];
	$datenais 	      = $_POST['datenaissance'];
	$email 	          = $_POST['email'];
	$adresse 	      = $_POST['adresse'];
	$cin 		      = $_POST['cin'];
	$matriculee       = $_POST['matricule'];
	if(empty($nom))
	{
	 $e["Nom"]="Le Champ 'Nom' Est Obligatoire";
	}
	if(empty($prenom))
	{
	 $e["Prenom"]="Le Champ 'Pr&eacute;nom' Est Obligatoire";
	}
	if(empty($datenais))
	{
     $e["datenaissance"]="Le Champ 'Date De Naissance' Est Obligatoire";
	}
	if(empty($email))
	{
	 $e["email"]="Le Champ 'Adresse Email' Est Obligatoire";
	}
	if(empty($adresse))
	{
     $e["adresse"]="Le Champ 'Adresse' Est Obligatoire";
	}
	if(empty($cin))
	{
     $e["cin"]="Le Champ 'Num&eacute;ro C.I.N' Est Obligatoire";
	}
	if(empty($matriculee))
	{
	 $e["MATRICULE"]="Le Champ 'Matricule' Est Obligatoire";
    }
	if(sizeof($e)<1)
	{
     $req_update  = "UPDATE  `personne` set Nom='".$nom."',Prenom='".$prenom."',datenaissance='".$datenais."',email='".$email."',adresse='".$adresse."',cin='".$cin."' where ID =".$idpersonne.";";
     $conn->query($req_update);
	 $req_update_emp = "UPDATE `employe` set MATRICULE='".$matriculee."' where REFPERSONNEE =".$idpersonne.";";								  
	 $conn->query($req_update_emp);
	 header('location:Employe.php');
	}
   }
  }
 }
 else
 {
  header('location:Employe.php');
 }
}
else
{
 header('location:Employe.php');
}
?>
<!DOCTYPE html>
<html>
<head>
 <meta charset="UTF-8" />
 <meta http-equiv="X-UA-Compatible" content="IE=edge" />	
 <title>Modifier Un Employ&eacute;</title>
 <meta name="viewport" content="width=device-width, initial-scale=1.0" />
 <link href="assets/application-b9abcf044a0bc3e705568d103eddd00e.css" media="all" rel="stylesheet" />
 <script  src="assets/application-851b8fea8f29120d8b765082481c5168.js"></script>
 <meta content="authenticity_token" name="csrf-param" />
 <meta content="THQUbKuhd5E4mpMsDBjVn3SNg1UbzeQi6+i/GfSy4qE=" name="csrf-token" />
 <!--[if lt IE 9]>
 <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
 <![endif]-->
</head>
<body id="form">
<div id="wrapper">
 <div id="sidebar-default" class="main-sidebar fix-scroll">
  <div class="current-user">
   <a href="#" class="name">
    <img alt="1" class="avatar" src="assets/avatars/1-60c47167290e620ea8ef2aa01d40c05e.jpg" />
    <span>
     Slimene Seif 
     <!--<i class="fa fa-chevron-down"></i>-->
    </span>
   </a>
   <ul class="menu">
    <li>
     <a href="/1.1/account/settings">Account settings</a>
    </li>
    <li>
     <a href="/1.1/account/billing">Billing</a>
    </li>
    <li>
     <a href="/1.1/account/notifications">Notifications</a>
    </li>
    <li>
     <a href="/1.1/account/support">Help / Support</a>
    </li>
    <li>
     <a href="/1.1/features/signin">Sign out</a>
    </li>
   </ul>
  </div>
 <div class="menu-section">
	<h3>Admin</h3>
    <ul>
      <li class="option">
<a href="Admin.php" class="sidebar">
          <i class="ion-home"></i> <span>Accueil</span>
        </a>
      </li>
	    <li class="option">
<a href="Login_Admin.php" class="sidebar">
          <i class="ion-gear-b"></i> <span>D&eacute;connexion</span>
        </a>
      </li>
<br>

    </ul>
    <h3>Ajout</h3>
    <ul>
      <li class="option">
<a href="Ajout_Client.php" class="sidebar">
          <i class="ion-android-earth"></i> <span>Client</span>
        </a>
      </li>
      <li class="option">
        <a href="Ajout_Employe.php" data-toggle="sidebar">
          <i class="ion-person-stalker"></i> <span>Employ&eacute;</span>
        </a>
      </li>
      <li class="option">
        <a href="Ajout_Projet.php" data-toggle="sidebar">
          <i class="ion-stats-bars"></i> <span>Projet</span>
        </a>
      </li>

    </ul>
  </div>
 </div>
 <div id="content">
  <div class="menubar">
   <div class="sidebar-toggler visible-xs">
    <i class="ion-navicon"></i>
   </div>
   <div class="page-title">
    <strong>Modifier Un Employ&eacute;</strong>
   </div>
  </div>
  <div class="content-wrapper">
   <form id="new-customer" class="form-horizontal" method="post" action="" role="form">
    <div class="form-group <?php if(isset($e['Nom'])){if(!empty($e['Nom'])){echo 'has-error';}}?>">
     <label class="col-sm-2 col-md-2 control-label">Nom</label>
     <div class="col-sm-10 col-md-8">
      <input type="text" class="form-control" name="Nom" value="<?php   echo $nom;?>" />
      <span class="help-block"><?php if(isset($e['Nom'])){if(!empty($e['Nom'])){echo $e['Nom'];}}?></span>
     </div>
    </div>
    <div class="form-group <?php if(isset($e['Prenom'])){if(!empty($e['Prenom'])){echo 'has-error';}}?>">
     <label class="col-sm-2 col-md-2 control-label">Pr&eacute;nom</label>
     <div class="col-sm-10 col-md-8">
  	  <input type="text" class="form-control" name="Prenom" value="<?php   echo $prenom;?>"/>
      <span class="help-block"><?php if(isset($e['Prenom'])){if(!empty($e['Prenom'])){echo $e['Prenom'];}}?></span>
     </div>
    </div>
    <div class="form-group <?php if(isset($e['datenaissance'])){if(!empty($e['datenaissance'])){echo 'has-error';}}?>">
     <label class="col-sm-2 col-md-2 control-label">Date De Naissance</label>
     <div class="col-sm-10 col-md-8">
      <input type="text" class="form-control" name="datenaissance" value="<?php   echo $datenais;?>"/>
      <span class="help-block"><?php if(isset($e['datenaissance'])){if(!empty($e['datenaissance'])){echo $e['datenaissance'];}}?></span>
     </div>
    </div>
    <div class="form-group <?php if(isset($e['email'])){if(!empty($e['email'])){echo 'has-error';}}?>">
     <label class="col-sm-2 col-md-2 control-label">Adresse Email</label>
     <div class="col-sm-10 col-md-8">
      <input type="text" class="form-control" name="email" value="<?php   echo $email;?>"/>
 	  <span class="help-block"><?php if(isset($e['email'])){if(!empty($e['email'])){echo $e['email'];}}?></span>
     </div>
    </div>
    <div class="form-group <?php if(isset($e['adresse'])){if(!empty($e['adresse'])){echo 'has-error';}}?>">
     <label class="col-sm-2 col-md-2 control-label">Adresse</label>
     <div class="col-sm-10 col-md-8">
      <input type="text" class="form-control" name="adresse" value="<?php   echo $adresse;?>"/>
 	  <span class="help-block"><?php if(isset($e['adresse'])){if(!empty($e['adresse'])){echo $e['adresse'];}}?></span>
     </div>
    </div>
    <div class="form-group <?php if(isset($e['cin'])){if(!empty($e['cin'])){echo 'has-error';}}?>">
     <label class="col-sm-2 col-md-2 control-label">Num&eacute;ro C.I.N</label>
     <div class="col-sm-10 col-md-8">
      <input type="text" class="form-control" name="cin" value="<?php   echo $cin;?>"/>
      <span class="help-block"><?php if(isset($e['cin'])){if(!empty($e['cin'])){echo $e['cin'];}}?></span>
     </div>
    </div>
    <div class="form-group <?php if(isset($e['MATRICULE'])){if(!empty($e['MATRICULE'])){echo 'has-error';}}?>">
     <label class="col-sm-2 col-md-2 control-label">Matricule</label>
     <div class="col-sm-10 col-md-8">
      <input type="text" class="form-control" name="matricule" value="<?php   echo $matriculee ;?>"/>
 	  <span class="help-block"><?php if(isset($e['MATRICULE'])){if(!empty($e['MATRICULE'])){echo $e['MATRICULE'];}}?></span>
     </div>
    </div>
    <div class="form-group form-actions">
     <div class="col-sm-offset-2 col-sm-10">
	  <a href="Modifier_Employe.php" class="btn btn-default">Annuler</a>
	  <button type="submit" class="btn btn-success">Enregistrer</button>
     </div>
    </div>
   </form>
  </div>
 </div>  
</div>   
</body>
</html>