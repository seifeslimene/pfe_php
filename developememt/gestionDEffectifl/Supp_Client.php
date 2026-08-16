<?php
include 'Config.php';
if(isset($_GET['id_client']))
{
 if(!empty($_GET['id_client']))
 {
  $id_client   = $_GET['id_client'];
  $req_supp_cli = "Delete p.*,c.* From `personne` as p join `client` as c where c.REFPERSONNE =p.ID AND c.ID=".$id_client.";";								  
  $conn->query($req_supp_cli);
  header('location:Affichage_Client.php');
 }
 else
 {
  header('location:Affichage_Client.php');
 }
}
else
{
 header('location:Affichage_Client.php');
}
?>
