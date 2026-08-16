<?php
include 'Config.php';
$req_emp = "select 
				* 
			from 
				personne
			join
				employe 
			where 
				employe.REFPERSONNEE = personne.ID
			";
$res = $conn->query($req_emp);
$data = array();

while($r = $res->fetch_assoc())
{
	$data[] = $r;
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />	
	<title>Affichage Des Employ&eacute;s</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
  	<link href="assets/application-b9abcf044a0bc3e705568d103eddd00e.css" media="all" rel="stylesheet" />
  	<script  src="assets/application-851b8fea8f29120d8b765082481c5168.js"></script>
  	<meta name="csrf-param" content="authenticity_token" />
    <meta name="csrf-token" content="WxO5cZ3OJ0BmyNBh1EQKldZTZUXJlRwI0gSXZrtiOIA" />
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
  <div class="content-wrapper"><a href="Ajout_Employe.php" class="btn btn-primary">Ajout D'un Employ&eacute;</a></div>        

<div class="menubar">
	<div class="sidebar-toggler visible-xs">
		<i class="ion-navicon"></i>
	</div>

	<div class="page-title">
			<strong>Liste Des Employ&eacute;s</strong>
	</div>
</div>

<div class="content-wrapper">
	
	
	
	
	<table  class="table">
        <thead>
            <tr>
                <th tabindex="0" rowspan="1" colspan="1">Nom
                </th>
                <th tabindex="0" rowspan="1" colspan="1">Pr&eacute;nom
                </th>
                <th tabindex="0" rowspan="1" colspan="1">Date Naissance
                </th>
                <th tabindex="0" rowspan="1" colspan="1">Email
                </th>
                <th tabindex="0" rowspan="1" colspan="1">Adresse
                </th>
				<th tabindex="0" rowspan="1" colspan="1">Mot De Passe
                </th>
				<th tabindex="0" rowspan="1" colspan="1">Num&eacute;ro C.I.N
                </th>
				<th tabindex="0" rowspan="1" colspan="1">Matricule
                </th>
				<th tabindex="0" rowspan="1" colspan="1">
                </th>
				<th tabindex="0" rowspan="1" colspan="1">
                </th>
				<th tabindex="0" rowspan="1" colspan="1">
                </th>
            </tr>
        </thead>
        <tbody>
		<?php foreach($data as $d) {?>
            <tr>
                <td><?php echo $d['Nom'];?></td>
				<td><?php echo $d['Prenom'];?></td>
				<td><?php echo $d['datenaissance'];?></td>
                <td><?php echo $d['email'];?></td>
				<td><?php echo $d['adresse'];?></td>
				<td><?php echo $d['mdp'];?></td>
				<td><?php echo $d['cin'];?></td>
				<td><?php echo $d['MATRICULE'];?></td>
				<td><a href="Ajout_Tache_Employe.php" class="btn btn-success">Affecter T&acirc;che</a></td>
                <td><a href="Modifier_Employe.php?id_employe=<?php echo $d['ID'];?>" class="btn btn-info">Modifier</a></td>
				<td><a href="Supp_Employe.php?id_employe=<?php echo $d['ID'];?>" class="btn btn-danger">Supprimer</a></td>
            </tr>
         <?php }?>
            
       	</tbody>
    </table>
	
	
	
	
	
	
	
	
</div>
        </div>  
    </div>   
</body>
</html>