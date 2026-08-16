<!DOCTYPE html>
<html>
 <head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />	
  <title>Bienvenue Admin</title>
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
      <img alt="1" class="avatar" src="images/M.S Pro.jpg" />
      <span>M.S Pro <!--<i class="fa fa-chevron-down"></i>--></span>
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
        <i class="ion-home"></i> 
        <span>Accueil</span>
       </a>
      </li>
	    <li class="option">
       <a href="Login_Admin.php" class="sidebar">
        <i class="ion-gear-b"></i> 
        <span>Déconnexion</span>
       </a>
      </li>
      <br>
     </ul>
     <h3>Ajout</h3>
     <ul>
      <li class="option">
       <a href="Ajout_Client.php" class="sidebar">
        <i class="ion-earth"></i> 
        <span>Client</span>
       </a>
      </li>
      <li class="option">
       <a href="Ajout_Employe.php" data-toggle="sidebar">
        <i class="ion-person-stalker"></i> 
        <span>Employé</span>
       </a>
      </li>
      <li class="option">
       <a href="Ajout_Projet.php" data-toggle="sidebar">
        <i class="ion-stats-bars"></i> 
        <span>Projet</span>
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