<?php
include 'Config.php';

$nom 		= "";
$prenom 	= "";
$datenais 	= "";
$email 	    = "";
$adresse 	= "";
$cin 		= "";
$matriculefiscal  = "";

$e = array();
	
if(isset($_POST))
{
	if(!empty($_POST))
	{
	
		$nom 		= $_POST['Nom'];
		$prenom 	= $_POST['Prenom'];
		$datenais 	= $_POST['datenaissance'];
		$email 	    = $_POST['email'];
		$adresse 	= $_POST['adresse'];
		$cin 		= $_POST['cin'];
		$matriculefiscal  =$_POST['matriculefiscale'];
		
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
			$e["cin"]="Le Champ 'Num&eacutero C.I.N' Est Obligatoire";
		}
		if(empty($matriculefiscal))
		{
			$e["MATRICULEFISCALE"]="Le Champ 'Matricule Fiscale' Est Obligatoire";
		}
		
		if(sizeof($e)<1)
		{
		$req_ajout  = "INSERT INTO `personne`
									( 	`Nom`,
										`Prenom`,
										`datenaissance`,
										`email`,
										`mdp`,
										`adresse`,
										`cin`) 
								 VALUES   ('".$nom."',
										  '".$prenom."',
										  '".$datenais."',
										  '".$email."',
										  ".$cin.",
										  '".$adresse."',
										  ".$cin."
										  
										  );";
		
		$conn->query($req_ajout);
		$ref_personne = $conn->insert_id;
		$req_ajout_emp = "INSERT INTO `client`
									( 	`MATRICULEFISCALE`,
										`REFPERSONNE`)
								 VALUES   ('".$matriculefiscal."',
										  ".$ref_personne."
										  );";
										  
		$conn->query($req_ajout_emp);
		header('location:Login_Client.php');

		}
	}
}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />	
	<title>Inscription</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
  	
  <link data-turbolinks-track="true" href="assets/application-b9abcf044a0bc3e705568d103eddd00e.css" media="all" rel="stylesheet" />
  <script data-turbolinks-track="true" src="assets/application-851b8fea8f29120d8b765082481c5168.js"></script>
  <meta content="authenticity_token" name="csrf-param" />
<meta content="hh4j5eQ/j+5tb/N19MN1oK+AYg2jZJ6XVK/1fNndRko=" name="csrf-token" />

  <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
</head>
<body id="signup">
	<div class="bg ">


		<a href="http://wolfadmin.herokuapp.com/1.1" class="logo">
			<i class="brankic-pen"></i>
		</a>

		<h3>Cr&eacute;er Votre Compte Maintenant!</h3>

		<div class="content">
			<form id="new-customer" class="form-horizontal" method="post" action="" role="form">
	
	
	
	  	<div class="fields <?php if(isset($e['Nom'])){if(!empty($e['Nom'])){echo 'has-error';}}?>">
		    <strong>Nom</strong>
		      <input type="text" class="form-control" name="Nom" value="<?php   echo $nom;?>" />
			  <span class="help-block"><?php if(isset($e['Nom'])){if(!empty($e['Nom'])){echo $e['Nom'];}}?></span>
	  	</div>
		
		
	  	<div class="fields <?php if(isset($e['Prenom'])){if(!empty($e['Prenom'])){echo 'has-error';}}?>">
		    <strong>Pr&eacute;nom</strong>
		      <input type="text" class="form-control" name="Prenom" value="<?php   echo $prenom;?>"/>
			  <span class="help-block"><?php if(isset($e['Prenom'])){if(!empty($e['Prenom'])){echo $e['Prenom'];}}?></span>
	  	</div>
		<div class="fields <?php if(isset($e['datenaissance'])){if(!empty($e['datenaissance'])){echo 'has-error';}}?>">
		    <strong>Date De Naissance</strong>
		      <input type="text" class="form-control" name="datenaissance" value="<?php   echo $datenais;?>"/>
			  <span class="help-block"><?php if(isset($e['datenaissance'])){if(!empty($e['datenaissance'])){echo $e['datenaissance'];}}?></span>
	  	</div>
	  	<div class="fields <?php if(isset($e['email'])){if(!empty($e['email'])){echo 'has-error';}}?>">
		    <strong>Adresse Email</strong>
		      	<input type="text" class="form-control" name="email" value="<?php   echo $email;?>"/>
				<span class="help-block"><?php if(isset($e['email'])){if(!empty($e['email'])){echo $e['email'];}}?></span>
	  	</div>
	  	<div class="fields <?php if(isset($e['adresse'])){if(!empty($e['adresse'])){echo 'has-error';}}?>">
		    <strong>Adresse</strong>
		      	<input type="text" class="form-control" name="adresse" value="<?php   echo $adresse;?>"/>
				<span class="help-block"><?php if(isset($e['adresse'])){if(!empty($e['adresse'])){echo $e['adresse'];}}?></span>
		</div>
	    <div class="fields <?php if(isset($e['cin'])){if(!empty($e['cin'])){echo 'has-error';}}?>">
		    <strong>Num&eacute;ro C.I.N</strong>
		      	<input type="text" class="form-control" name="cin" value="<?php   echo $cin;?>"/>
				<span class="help-block"><?php if(isset($e['cin'])){if(!empty($e['cin'])){echo $e['cin'];}}?></span>
		</div>
	    <div class="fields <?php if(isset($e['MATRICULEFISCALE'])){if(!empty($e['MATRICULEFISCALE'])){echo 'has-error';}}?>">
		    <strong>Matricule Fiscale</strong>
		      	<input type="text" class="form-control" name="matriculefiscale" value="<?php   echo $matriculefiscal ;?>"/>
				<span class="help-block"><?php if(isset($e['MATRICULEFISCALE'])){if(!empty($e['MATRICULEFISCALE'])){echo $e['MATRICULEFISCALE'];}}?></span>
		</div>
		       <div class="actions">
		<center><button type="submit" class="btn btn-primary btn-lg">Enregistrer Mon Compte </button></center>
	   </div>
			</form>
		</div>

	 <div class="bottom-wrapper">
	  <div class="message">
	   <span></span>
	   <a href="Login_Client.php"><H2>Espace Client</H2></a>
	  </div>
	 </div>
	</div>



</body>
</html>
