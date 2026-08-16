<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Accueil</title>
		<link href="css/bootstrap.css" rel="stylesheet">
		<link href="css/Landing-Page.css" rel="stylesheet">
		<link href="css/font-awesome.css" rel="stylesheet">
		<script src="js/jquery.js"></script>
		<script src="js/bootstrap.js"></script>
		<!--[if lt IE 9]>
		 <script src="js/html5shiv.js"></script>
		 <script src="js/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>
	 <div class="intro-header">
	  <div class="container">
	   <div class="row">
	    <div class="col-lg-12">
	     <div class="intro-message">
	      <h1>Bienvenue Sur Notre Application</h1>
		     <br>
	      <h2>Gestion D'Effectif Dans Une Société Informatique</h2>
	      <hr class="intro-divider">
	      <ul class="list-inline intro-social-buttons">
	       <li>
	        <a href="Login_Client.Php" class="btn btn-default btn-lg"><span class="network-name"><b>Client</b></span></a>
	       </li>
	       <li>
	        <a href="Login_Employe.Php" class="btn btn-default btn-lg"><span class="network-name"><b>Employé</b></span></a>
	       </li>
	      </ul>
	     </div>
	    </div>
	   </div>
	  </div>
	 </div>
	 <footer>
	  <div class="container">
	   <div class="row">
	    <div class="col-lg-12">
	     <ul class="list-inline">
	      <li>
	       <a href="Index.Php">Accueil</a>
	      </li>
	      <li class="footer-menu-divider">&sdot;</li>
	      <li>
	       <a href="Propos.Php">A Propos</a>
	      </li>
	      <li class="footer-menu-divider">&sdot;</li>
	      <li>
	       <a href="Contact.Php">Contact</a>
	      </li>
	     </ul>
	     <p class="copyright text-muted small">Gestion D'Effectif &copy; <?php echo "Juin "; echo date("Y");?></p>
	    </div>
	   </div>
	  </div>
	 </footer>
	</body>
</html>