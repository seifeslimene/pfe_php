<?php
include 'Config.php';
if(isset($_GET['id_tache']))
{
 if(!empty($_GET['id_tache']))
 {
  $id_tache   = $_GET['id_tache'];
  $req="Select p.* from `projet` as p join `tache` as t where t.`REFPROJET`=p.`ID` AND t.ID=".$id_tache;
  $res=$conn->query($req);
  $data=array();
  while($r = $res->fetch_assoc())
  {
   $data[] = $r;
  }
  foreach($data as $d)
  $n=$d['ID'];
  $req_supp_tache = "Delete From `tache` where ID=".$id_tache.";";								  
  $conn->query($req_supp_tache);
  header('location:Affichage_Taches.php?id_projet='.$n);
 }
 else
 {
  header('location:Affichage_Taches.php');
 }
}
else
{
header('location:Affichage_Taches.php');
}
?>
