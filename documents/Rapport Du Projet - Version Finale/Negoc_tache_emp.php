<?php
$title          = "Négociation Du Tâche";
include 'Init.Php';
if (isset($_GET['id_tache']))
{
	if (!empty($_GET['id_tache']))
	{
		$req="update tache set etat_negoc=1, REFEMPLOYE=".$_SESSION['ID_EMPLOYE']." where ID=".$_GET['id_tache'];
		$res2=$conn->query($req);
		$req3 = "select * from projet as p join tache as t where (t.REFPROJET = p.id_projet) AND (t.ID=".$_GET['id_tache'].")";
        $res3 = $conn->query($req3);
		while ($r=$res3->fetch_assoc())
		{
		header('location:Affichage_Taches_Emp.php?id_projet='.$r['id_projet']);
		}
	}
}
?>
<?php include $tpl . "Footer.Php"; ?>