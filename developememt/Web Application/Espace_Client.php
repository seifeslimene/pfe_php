<!DOCTYPE html>
<html>
 <head>
  <meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />	
	<title>Espace Client</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="css/Template.css" media="all" rel="stylesheet" />
  <script  src="js/Template.js"></script>
  <!--[if lt IE 9]>
   <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
 </head>
 <body id="dashboard">	
	<div id="wrapper">
   <div id="sidebar-default" class="main-sidebar fix-scroll">
    <div class="current-user">
     <a href="#" class="name">
      <img alt="1" class="avatar" src="images/client.png" />
      <span>
       Client
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
       <a href="Projet_Emp.php" data-toggle="sidebar">
        <i class="ion-pie-graph"></i> <span>Liste Des Projets</span>
       </a>
      </li>
     </ul>
	   <br>
	   <h3>Mon Compte</h3>
     <ul>
      <li class="option">
       <a href="Login_client.php" class="sidebar">
        <i class="ion-gear-b"></i> <span>Déconnexion</span>
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
		  <strong><h4 style="margin-top:0px;"><font color="green" face="monotype corsive" size="5">Bienvenue Client</font></H4></strong>
	   </div>
    </div>
    <div class="content-wrapper">
     <div class="metrics clearfix">
      <div class="metric">
       <span class="field">Nombre d'employés</span>
       <span class="data">0</span>
      </div>
      <div class="metric">
       <span class="field">Nombre De Clients</span>
       <span class="data">0</span>
      </div>
      <div class="metric">
       <span class="field">Nombre De Projets Demandés</span>
       <span class="data">0</span>
      </div>
	    <div class="metric">
       <span class="field">Nombre De Projets Terminés</span>
       <span class="data">0</span>
      </div>
     </div>
    </div>
   </div>  
  </div>   
 </body>
</html>