<?php
include 'config.php';
$req='select count(*) from client;';
$q=$conn->query($req);
$clt =array();
while($r = $q->fetch_assoc())
{    
$clt=$r;
}
foreach($clt as $c)
{
$a=$c;
}
$req2='select count(*) from employe;';
$q2=$conn->query($req2);
$clt2 =array();
while($r2 = $q2->fetch_assoc())
{    
$clt2=$r2;
}
foreach($clt2 as $c2)
{
$b=$c2;
}
$req3='select count(*) from projet;';
$q3=$conn->query($req3);
$clt3 =array();
while($r3 = $q3->fetch_assoc())
{    
$clt3=$r3;
}
foreach($clt3 as $c3)
{
$c=$c3;
}
$req4='select count(*) from tache;';
$q4=$conn->query($req4);
$clt4 =array();
while($r4 = $q4->fetch_assoc())
{    
$clt4=$r4;
}
foreach($clt4 as $c4)
{
$d=$c4;
}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />	
	<title>Bienvenue Admin</title>
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
<a href="Espace_Admin.php" class="sidebar">
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
	</br>
		<h3>Autre</h3>
    <ul>
      <li class="option">
        <a href="Contact_Admin.php" data-toggle="sidebar">
          <i class="ion-person-stalker"></i> <span>Contact</span>
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
			<h3><strong>Bienvenue <font color="Red">Admin</Font></strong></h3>
	</div>
</div>
<div class="content-wrapper">
<div class="metrics clearfix">
    <div class="metric">
      <span class="field">Nombre d'employ&eacute;s</span>
      <span class="data"><?php echo $b; ?></span>
    </div>
    <div class="metric">
      <span class="field">Nombre De Clients</span>
      <span class="data"><?php echo $a; ?></span>
    </div>
    <div class="metric">
      <span class="field">Nombre De Projets</span>
      <span class="data"><?php echo $c; ?></span>
    </div>
	   <div class="metric">
      <span class="field">Nombre De T&acirc;ches</span>
      <span class="data"><?php echo $d; ?></span>
    </div>
  </div>
</div>
</div>  
</div>   
</body>
</html>