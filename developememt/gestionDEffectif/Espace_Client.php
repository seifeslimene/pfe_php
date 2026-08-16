<?php
include 'Config.php';

if(isset($_GET['id_client']))
{
 if(!empty($_GET['id_client']))
 {
  $id_client   = $_GET['id_client'];
  $req = "select p.* from `personne` as p join `client` as c where c.REFPERSONNE=p.ID AND p.ID=".$id_client;
  $res=$conn->query($req);
  $data=array();
  while($r = $res->fetch_assoc())
  {
   $data[] = $r;
  }
 }
}

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />	
	<title><?php   foreach($data as $d) {
		  echo "Bienvenue ".$d['Nom']." ".$d['Prenom'];
		  }?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
  	<link href="assets/application-b9abcf044a0bc3e705568d103eddd00e.css" media="all" rel="stylesheet" />
  	<script  src="assets/application-851b8fea8f29120d8b765082481c5168.js"></script>
  	<meta content="authenticity_token" name="csrf-param" />
<meta content="THQUbKuhd5E4mpMsDBjVn3SNg1UbzeQi6+i/GfSy4qE=" name="csrf-token" />
  	<!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>
<body id="dashboard">
	
	<div id="wrapper">
    
        <div id="sidebar-default" class="main-sidebar fix-scroll">
  <div class="current-user">
      <a href="#" class="name">
        <img alt="1" class="avatar" src="assets/avatars/client.png" />
        <span>
          <?php   foreach($data as $d) {
		  echo $d['Nom']." ".$d['Prenom'];
		  }?>  
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
    <h3>Affichage</h3>
    <ul>
      <li class="option">
<a href="Profil_Emp.php" class="sidebar">
          <i class="ion-person"></i> <span>Mon Profil</span>
        </a>
      </li>
      <li class="option">
        <a href="Projet_Client.php?id_client=<?php  foreach($data as $d) { echo $d['ID']; } ?>" data-toggle="sidebar">
          <i class="ion-pie-graph"></i> <span>Mes Projets</span>
        </a>
      </li>
    </ul>
	<br>
	<h3>Mon Compte</h3>
    <ul>
	<li class="option">
<a href="Espace_Client.php?id_client=<?php   foreach($data as $d) { echo $d['ID'];} ?>" class="sidebar">
          <i class="ion-home"></i> <span>Accueil</span>
        </a>
      </li>
      <li class="option">
<a href="Login_Employe.php" class="sidebar">
          <i class="ion-gear-b"></i> <span>D&eacute;connexion</span>
        </a>
      </li>
      <li class="option">
        <a href="contact.php" data-toggle="sidebar">
          <i class="ion-android-mail"></i> <span>Contact</span>
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
			<strong><h4 style="margin-top:0px;"><?php   foreach($data as $d) {  ?><font size="5"><?php echo "Bienvenue "?></font> <font color="green" face="monotype corsive" size="5"> <?php echo ' '.$d['Nom']." ".$d['Prenom'];?> <?php echo ' ' ?></font><?php
		  }?></H4></strong>
	</div>
</div>

<div class="content-wrapper">
<div class="metrics clearfix">
    <div class="metric">
      <span class="field">Nombre De Projets Demand&eacute;s</span>
      <span class="data">0</span>
    </div>
	   <div class="metric">
      <span class="field">Nombre De Projets Termin&eacute;s</span>
      <span class="data">0</span>
    </div>
	    <div class="metric">
      <span class="field">Nombre De T&acirc;ches Termin&eacute;s</span>
      <span class="data">0</span>
    </div>
  </div>

</div>
        </div>  
    </div>   
</body>
</html>