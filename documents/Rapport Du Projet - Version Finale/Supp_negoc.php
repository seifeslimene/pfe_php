<?php
$noNavbar = "";
include 'Init.php';
if(isset($_GET['id_tache']))
{
if(!empty($_GET['id_tache']))
{
$id_tache = $_GET['id_tache'];
$req_supp_negoc = "update tache set etat_negoc=0 where ID=".$id_tache.";";
$conn->query($req_supp_negoc);
$req3 = "select * from projet as p join tache as t where (t.REFPROJET = p.id_projet) AND (t.ID=".$_GET['id_tache'].")";
$res3 = $conn->query($req3);
while ($r=$res3->fetch_assoc())
{
header('location:Affichage_Taches_Emp.php?id_projet='.$r['id_projet']);
}
}
else
{
header('location:Affichage_Taches_Emp.php?id_projet='.$r['id_projet']);
}
}
else
{
header('location:Affichage_Projet.php');
}
?>