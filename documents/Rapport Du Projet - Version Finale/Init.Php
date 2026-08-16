<?php
// Connecting To Database On Localhost Server
if (!isset($NoConnect)) { include "Connect.Php"; }
//Routes
$func 				= "Includes/Functions/";   // Functions Directory
$lang 				= "Includes/Languages/";   // Languages Directory
$lib  				= "Includes/Libraries/";   // Libraries Directory
$tpl  				= "Includes/Templates/";   // Templates Directory
$css  				= "Layout/Css/";           // Css Directory
$fonts              = "Layout/Fonts";          // Fonts Directory
$images             = "Layout/Images/";        // Images Directory
$js                 = "Layout/Js/";            // Js Directory
$uploads            = "Data/Uploads/";         // Data Directory
// Include The Important Files
include $func . "PageTitle.Php";
// Include Header Intro On Pages Where $HeaderIntro variable Is Defined Else Include Header
if (isset($HeaderIntro)) { include $tpl . "Header Intro.Php"; } else { include $tpl . "Header.Php"; }
// Include Images
if (!isset($NoConnect)) {
session_start();
if (isset($_SESSION['ID_CLIENT']))
{
$grabim = "SELECT image FROM personne WHERE ID=".$_SESSION['ID_CLIENT'];
$resgrabim = $conn->query($grabim);
while ($r=$resgrabim->fetch_assoc())
{
if ($r['image']=='Client')
{
$imageclient  = $images."Client.png";
}
else
{
$imageclient = $uploads.$_SESSION['image'];
}
}
}
if (isset($_SESSION['ID_EMPLOYE']))
{
$grabim = "SELECT image FROM personne WHERE ID=".$_SESSION['ID_EMPLOYE'];
$resgrabim = $conn->query($grabim);
while ($r=$resgrabim->fetch_assoc())
{
if ($r['image']=='Employé')
{
$imageemploye  = $images."Employe.png";
}
else
{
$imageemploye = $uploads.$_SESSION['imageemp'];
}
}
}
}
// Include Navbar Of Client Or Employe
if (isset($ClientNavbar)) { include $tpl . "ClientNavbar.Php"; }
if (isset($EmployeNavbar)) { include $tpl . "EmployeNavbar.Php"; }