<?php
include 'Config.php';

$email 	= "";
$mdp 	= "";
$e = array();


if(isset($_POST))
{
 if(!empty($_POST))
 {
  $email  = $_POST['adresse_email'];
  $mdp    = $_POST['motpasse'];
  if(empty($email))
  {
   $e["Email"]="Le Champ 'Adresse Email' Est Obligatoire";
  }
  if(empty($mdp))
  {
   $e["MDP"]="Le Champ 'Mot De Passe' Est Obligatoire";
  }
  if(sizeof($e)<1)
  {
   $req  = "select p.* from `personne` as p join `client` as c where ((c.`REFPERSONNE`=p.`ID`) AND (p.`email`='".$email."') AND (p.`mdp`='".$mdp."'))";  
   $res=$conn->query($req);
   $data = array();
    while($r = $res->fetch_assoc())
    {
	 $data[] = $r;
    }
    foreach($data as $d)
	{
    if (($email == $d['email'])AND($mdp==$d['mdp']))
    {
     header('location:Espace_Client.php?id_client='.$d['ID']);
    }
	else
	{
	header('location:Login_Client.php');
	}
   }
   }
 }
}
?>
<!DOCTYPE html>
<html>
<head>
 <meta charset="UTF-8" />
 <meta http-equiv="X-UA-Compatible" content="IE=edge" />	
 <title>Login - Espace Client</title>
 <meta name="viewport" content="width=device-width, initial-scale=1.0" />
 <link data-turbolinks-track="true" href="assets/application-b9abcf044a0bc3e705568d103eddd00e.css" media="all" rel="stylesheet" />
 <script data-turbolinks-track="true" src="assets/application-851b8fea8f29120d8b765082481c5168.js"></script>
 <meta content="authenticity_token" name="csrf-param" />
 <meta content="6ZeyDTI9aTQCDlIqJ1Ohy2kaXGoHZFHI/lvBrezf0dA=" name="csrf-token" />
 <!--[if lt IE 9]>
 <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
 <![endif]-->
</head>
<body id="signin">
	<div class="bg clear">
	 <a href="Index.Php" class="logo"><i class="brankic-pen"></i></a>
     <h3><B>Espace Client</B></h3>
     <div class="content">
	  <form id="new-customer" class="form-horizontal" method="post" action="" role="form">
	  
	   <div class="fields <?php if(isset($e['Email'])){if(!empty($e['Email'])){echo 'has-error';}}?>">
	    <strong>Adresse Email</strong>
	    <input type="text" class="form-control" name="adresse_email" value="<?php   echo $email;?>"/>
	    <span class="help-block"><?php if(isset($e['Email'])){if(!empty($e['Email'])){echo $e['Email'];}}?></span>
	   </div>
	  
	   <div class="fields <?php if(isset($e['MDP'])){if(!empty($e['MDP'])){echo 'has-error';}}?>">
	    <strong>Mot De Passe</strong>
		<input class="form-control" type="password"  name="motpasse" value="<?php   echo $mdp;?>"/>
		<span class="help-block"><?php if(isset($e['MDP'])){if(!empty($e['MDP'])){echo $e['MDP'];}}?></span>
	   </div>

       <div class="actions">
		<button type="submit" class="btn btn-primary btn-lg">Acc&eacute;der &agrave; Mon Espace </button>
		<br><br><a href="Inscription_Client.php">Ou Inscrivez-Vous Ici</a>
	   </div>
	   
	  </form>
	 </div>

	 <div class="bottom-wrapper">
	  <div class="message">
	   <span></span>
	   <a href="Login_Employe.php"><H2>Espace Employ&eacute;</H2></a>
	  </div>
	 </div>
    </div>
</body>
</html>