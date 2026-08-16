<?php
include 'Config.php';
$email = "";
$mdp = "";
$e = array();
if(!empty($_POST))
{
 $email  = $_POST['adresse_email'];
 $mdp    = $_POST['motpasse'];
 if(empty($email))
 {
  $e['Email']="Le Champ 'Adresse Email' Est Obligatoire";
 }
 if(empty($mdp))
 {
  $e['MDP']="Le Champ 'Mot De Passe' Est Obligatoire";
 }
 if(sizeof($e)<1)
 {
  $req  = "select p.* from `personne` as p join `employe` as e where ((e.`REFPERSONNEE`=p.`ID`) AND (p.`email`='".$email."') AND (p.`mdp`='".$mdp."'))";  
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
    header('location:Espace_Emp.php?id_employe='.$d['ID']);
   }
   else
   {
    header('location:Espace_Emp.php');
   }
  }
 }
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
 <meta charset="UTF-8" />
 <meta http-equiv="X-UA-Compatible" content="IE=edge" />	
 <title>Login - Espace Employé</title>
 <meta name="viewport" content="width=device-width, initial-scale=1.0" />
 <link data-turbolinks-track="true" href="css/Template.css" media="all" rel="stylesheet" />
 <script data-turbolinks-track="true" src="js/Template.js"></script>
 <!--[if lt IE 9]>
  <script src="js/html5.js"></script>
 <![endif]-->
</head>
<body id="signin">
 <div class="bg clear">
  <a href="Index.Php" class="logo"><i class="brankic-profile2"></i></a>
  <h3><B>Espace Employé</B></h3>
  <div class="content">
   <form id="new-customer" class="form-horizontal" method="post">
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
   <button type="submit" class="btn btn-primary btn-lg">Accéder à Mon Espace </button>
  </div>
  </form>
 </div>
 <div class="bottom-wrapper">
  <div class="message">
   <span></span>
   <a href="Login_Client.php"><H2 class="mes">Espace Client</H2></a>
  </div>
 </div>
</div>
</body>
</html>