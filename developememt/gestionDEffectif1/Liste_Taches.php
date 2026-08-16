<?php
include 'Config.php';
if(isset($_GET['id_projet']))
{
  if(!empty($_GET['id_projet']))
  {
   $id_projet   = $_GET['id_projet'];
   $req_liste_tache = "select * from `tache` where REFPROJET=".$id_projet;								  
   $res = $conn->query($req_liste_tache);
   $data = array();
   while($r = $res->fetch_assoc())
   {
    $data[] = $r;
   }
   $req_liste_tache1 = "select * from `projet` where ID=".$id_projet.";";								  
   $res1 = $conn->query($req_liste_tache1);
   $data1 = array();
     while($r1 = $res1->fetch_assoc())
   {
    $data1[] = $r1;
   }
   foreach($data1 as $d1) {
   $n = $d1['Nom_Proj'];
   }
  }
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />	
	<title>Liste Des T&acirc;ches Du Projet <?php echo $n; ?></title>
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
        <img alt="Mon Avatar" class="avatar" src="assets/avatars/1-60c47167290e620ea8ef2aa01d40c05e.jpg" />
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
 <div class="content-wrapper"><a href="Ajout_Tache.php?id_projet=<?php echo $id_projet;?>" class="btn btn-primary">Ajout D'une T&acirc;che</a></div>          

<div class="menubar">
	<div class="sidebar-toggler visible-xs">
		<i class="ion-navicon"></i>
	</div>

	<div class="page-title">
			<strong>Liste Des T&acirc;ches Du Projet <font color="Red">" <?php echo $n; ?> "</font></strong>
	</div>
</div>

<div class="content-wrapper">
	
	
	
	
	<table  class="table">
        <thead>
            <tr>
                <th tabindex="0" rowspan="1" colspan="1">T&acirc;ches
                </th>
				<th tabindex="0" rowspan="1" colspan="1">
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
            <td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
		    </td></td>	<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
			<td><a href="Modifier_Tache.php?id_tache=<?php echo $d['ID'];?>" class="btn btn-info">Modifier</a>
				<a href="Supp_Tache.php?id_tache=<?php echo $d['ID'];?>" class="btn btn-danger">Supprimer</a></td></tr>
         <?php }?>
            
       	</tbody>
    </table>
	
	
	
	
	
	
	
	
</div>
        </div>  
    </div>   
</body>
</html>