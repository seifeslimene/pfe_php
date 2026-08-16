<?php
include 'Config.php';
if(isset($_GET['id_projet']))
{
 if(!empty($_GET['id_projet']))
 {
  $id_projet = $_GET['id_projet'];
  $req_c = "select * from projet where ID=".$id_projet;			
  $res = $conn->query($req_c);
  $clt =array();
  while($r = $res->fetch_assoc())
  {    
   $clt=$r;
  }
  $nom 		        = $clt['Nom_Proj'];
  $descriptio 	    = $clt['Description_Proj'];
  $e = array();
  if(isset($_POST))
  {
   if(!empty($_POST))
   {
	$nom 		      = $_POST['Nom'];
	$description 	  = $_POST['Descriptionn'];
	if(empty($nom))
	{
	 $e["Nom_Proj"]="Le Champ 'Nom Du Projet' Est Obligatoire";
	}
	if(empty($description))
	{
	 $e["Description_Proj"]="Le Champ 'Description Du Projet' Est Obligatoire";
	} 
	  if(sizeof($e)<1)
	  {
       $req_update  = "UPDATE  `projet` set Nom_Proj='".$nom."',Description_Proj='".$description."' where ID =".$id_projet;
       $conn->query($req_update);
	   header('location:Projet.php');
	  }
    }
   }
  }
 else
 {
  header('location:Projet.php');
 }
}
else
{
 header('location:Projet.php');
}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />	
	<title>Modifier Un Projet</title>
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
			<strong>Modifier Un Projet</strong>
	</div>
</div>

<div class="content-wrapper">
<form id="new-customer" class="form-horizontal" method="post" action="" role="form">


	  	<div class="form-group <?php if(isset($e['Nom_Proj'])){if(!empty($e['Nom_Proj'])){echo 'has-error';}}?>">
		    <label class="col-sm-2 col-md-2 control-label">Nom Du Projet</label>
		    <div class="col-sm-10 col-md-8">
		      <input type="text" class="form-control" name="Nom" value="<?php   echo $nom;?>"/>
			  <span class="help-block"><?php if(isset($e['Nom_Proj'])){if(!empty($e['Nom_Proj'])){echo $e['Nom_Proj'];}}?></span>
		    </div>
	  	</div>
		
	  	<div class="form-group <?php if(isset($e['Description_Proj'])){if(!empty($e['Description_Proj'])){echo 'has-error';}}?>">
		    <label for="inputPassword3" class="col-sm-2 col-md-2 control-label">Description Du Projet</label>
		    <div class="col-sm-10 col-md-8">
		    	<textarea class="form-control" rows="6" name="Descriptionn" value=""><?php   echo $descriptio;?></textarea>
				<span class="help-block"><?php if(isset($e['Description_Proj'])){if(!empty($e['Description_Proj'])){echo $e['Description_Proj'];}}?></span>
		    </div>
	  	</div>
		
	  	<div class="form-group form-actions">
	    	<div class="col-sm-offset-2 col-sm-10">
	    		<a href="Projet.php" class="btn btn-default">Annuler</a>
	      		<button type="submit" class="btn btn-success">Enregistrer Le Projet</button>
    		</div>
	  	</div>
	</form>
</div>
        </div>  
    </div>   
</body>
</html>