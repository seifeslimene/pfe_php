<?php
include 'Config.php';
if(isset($_GET['id_employe']))
{
 if(!empty($_GET['id_employe']))
 {
  $id_employe   = $_GET['id_employe'];
  $req_supp_emp = "Delete p.*,e.* From `personne` as p join `employe` as e where e.REFPERSONNEE =p.ID AND e.ID=".$id_employe.";";								  
  $conn->query($req_supp_emp);
  header('location:Employe.php');
 }
 else
 {
  header('location:Employe.php');
 }
}
else
{
 header('location:Employe.php');
}
?>
