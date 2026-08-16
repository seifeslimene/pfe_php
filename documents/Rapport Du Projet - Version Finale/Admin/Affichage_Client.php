<?php
$title          = "Affichage Des Clients";
include 'Init.php'
?>
<?php
$perpage = 7;
$cpage=1;
$req5  = "SELECT count(*) as Nb from personne join client where client.REFPERSONNE = personne.ID";
$res5  = $conn->query($req5);
$nb=$res5->fetch_assoc();
$nbrclient=$nb['Nb'];
$nbrpages=ceil($nbrclient/$perpage);
if ((isset($_GET['p'])) and ($_GET['p']>=1) and ($_GET['p']<=$nbrpages))
{
	$cpage=$_GET['p'];
}
else
{
	$cpage=1;
}
$req  = "SELECT * from personne join client where client.REFPERSONNE = personne.ID LIMIT ".(($cpage-1)*$perpage).", ".$perpage;
$res  = $conn->query($req);
?>
<div id="content" class="affcli">
<div class="content-wrapper"><a href="Ajout_Client.php" class="btn btn-primary">Ajout D'un Client</a></div>
<div class="menubar">
<div class="page-title">
<h3><strong>Liste Des Clients</strong></h3>
</div>
</div>
<div class="content-wrapper">
<?php if ($nb['Nb']!=0) { ?>
<table class="table table-hover su">
<thead>
<tr>
<th>Nom</th>
<th>Prénom</th>
<th>Date De Naissance</th>
<th>Numéro C.I.N</th>
<th>Matricule Fiscale</th>
<th></th>
</tr>
</thead>
<tbody>
<?php while($r = $res->fetch_assoc()) { ?>
<tr>
<td><?php echo $r['Nom'];?></td>
<td><?php echo $r['Prenom'];?></td>
<td><?php echo $r['datenaissance'];?></td>
<td><?php echo $r['cin'];?></td>
<td><?php echo $r['MATRICULEFISCALE'];?></td>
<td>
<a href="Lire.Php?id_client=<?php echo $r['ID']."&p=".$_GET['p'];?>" class="btn btn-primary">Lire</a>
<a href="Modifier_Client.php?id_client=<?php echo $r['id_client'];?>" class="btn btn-info">Modifier</a>
<a href="Supprimer.php?id_client=<?php echo $r['ID'];?>" class="btn btn-danger">Supprimer</a>
</td>
</tr>
<?php } ?>
</tbody>
</table>
<?php if ($nb['Nb']>$perpage*4) { ?>
<nav>
  <ul class="pagination">
  	<li <?php if(isset($_GET['p'])) { if($_GET['p']==1) { echo "class='disabled'"; } } ?>><a href="Affichage_Client.php?p=<?php if (isset($_GET['p'])) { if($_GET['p']>=2) { echo ($_GET['p']-1); } else { echo "1"; } } ?>"><span>&laquo;</span></a></li>
	<?php for($i = max(1, $cpage - 4); $i <= max(5, $cpage); $i++) { ?>
    <li <?php if (isset($_GET['p'])) { if($_GET['p']==$i) { echo "class='active'"; } } ?>><a href="Affichage_Client.php?p=<?php echo $i; ?>"><?php echo $i ?></a></li>
	<?php } ?>
	<li <?php if(isset($_GET['p'])) { if($_GET['p']==$nbrpages) { echo "class='disabled'"; } } ?>><a href="Affichage_Client.php?p=<?php if (isset($_GET['p'])) { if ($_GET['p']<=$nbrpages-1) { echo ($_GET['p']+1); } else { echo $nbrpages; } } ?>"><span>&raquo;</span></a></li>
  </ul>
</nav>
<?php } ?>
<?php if (($nb['Nb']>=1) and ($nb['Nb']<=$perpage*4)) { ?>
<nav>
  <ul class="pagination">
  	<li <?php if(isset($_GET['p'])) { if($_GET['p']==1) { echo "class='disabled'"; } } ?>><a href="Affichage_Client.php?p=<?php if (isset($_GET['p'])) { if($_GET['p']>=2) { echo ($_GET['p']-1); } else { echo "1"; } } ?>"><span>&laquo;</span></a></li>
	<?php for($i = 1; $i <= $nbrpages; $i++) { ?>
    <li <?php if (isset($_GET['p'])) { if($_GET['p']==$i) { echo "class='active'"; } } ?>><a href="Affichage_Client.php?p=<?php echo $i; ?>"><?php echo $i ?></a></li>
	<?php } ?>
	<li <?php if(isset($_GET['p'])) { if($_GET['p']==$nbrpages) { echo "class='disabled'"; } } ?>><a href="Affichage_Client.php?p=<?php if (isset($_GET['p'])) { if ($_GET['p']<=$nbrpages-1) { echo ($_GET['p']+1); } else { echo $nbrpages; } } ?>"><span>&raquo;</span></a></li>
  </ul>
</nav>
<?php } ?>
<?php } else { echo "<div class='alert alert-info' role='alert'><a href='#' class='alert-link'>Il n'ya Aucun Client à ce moment.</a></div>"; } ?>
</div>
</div>
<?php include $tpl . "Footer.Php"; ?>