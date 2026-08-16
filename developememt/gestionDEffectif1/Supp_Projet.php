<?php
include 'Config.php';
if(isset($_GET['id_projet']))
{
 if(!empty($_GET['id_projet']))
 {
  $id_projet   = $_GET['id_projet'];
  $req_supp_proj = "Delete From `projet` where ID=".$id_projet.";";								  
  $conn->query($req_supp_proj);
  $req_supp_tacheprojet = "Delete From `tache` where REFPROJET=".$id_projet.";";								  
  $conn->query($req_supp_tacheprojet);
  header('location:Projet.php');
  
 }
 else
 {
  header('location:Projet.php');
 }
}
else
{
 header('location:Projet.php');
}
?>
