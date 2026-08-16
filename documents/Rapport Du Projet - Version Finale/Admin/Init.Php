<?php
if (!isset($NoConnect)) { include "Connect.Php"; }
//Routes
$tpl      = "Includes/Templates/";   // Templates Directory
$lang     = "Includes/Languages/";   // Languages Directory
$func     = "Includes/Functions/";   // Functions Directory
$lib      = "Includes/Libraries/";   // Libraries Directory
$css      = "Layout/Css/";           // Css Directory
$js       = "Layout/Js/";            // Js Directory
$images   = "Layout/Images/";        // Images Directory
$fonts    = "Layout/Fonts";          // Fonts Directory
// Include The Important Files
include $func . "PageTitle.Php";
// Include Header
include $tpl . "Header.Php";
// Include Images
$imageAdmin  = $images. "M.S Pro.Jpg";
// Include Navbar On All Pages Except The One With $noNavbar variable
if (!isset($noNavbar)) { include $tpl . "Navbar.Php"; }
?>