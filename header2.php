<?php
				/*require_once("scripts/session.php");
				require_once("scripts/authentification.php");
				require_once("scripts/constantes.php");*/
				require_once("scripts/fonctionBDD.php");					
				/*$connexion = connexion(SERVEUR, NOM_SERVEUR, MOT_PASSE, NOM_BASE);
				// si reception d'une information de déconnexion
				if(isset($_POST['logout'])){
					supprimerSession(session_id(), $connexion);
				}
				
				$message=false;
				// si reception d'un email et d'un mot de passe
				// test si les logins sont vrais
				if(isset($_POST['Username']) and isset($_POST['pwd'])){					
					$requete = "SELECT User FROM user_login WHERE User='" . $_POST['Username'] . "' and pwd='" . md5($_POST['pwd']) . "'";
					$resultat = mysql_query($requete, $connexion);
					$utilisateur = mysql_fetch_array($resultat);
					// les logins sont bons, on enregistre la session dans la BDD
					if($utilisateur){
						creerSession( session_id(), $_POST['Username'], $connexion);						
					}
					else{
						$message=true;
					}
				}
				
				// on récupère la session dans la BD
				$session = controlerSession(session_id(), $connexion);*/

?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" >
<head>
	
	<title>the_freelancer</title>
	<meta charset="utf-8">
	<meta description="">
	<meta keywords="article writing, web design, translation and interpretation, career adviser, English, freelance">
	<meta name="viewport" content="width=device-width, initial-sacle=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	
	
	<!--links css-->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Tangerine">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/w3.css">
	<!--links css-->
	
	<!--links JavaScript-->
	
	<!--links JavaScript-->
	
</head>
<body>

<div id="container-header">
		<h1 id="team">The&nbsp;Freelancer</h1>
<header>
		<div id="logo" class="">
		<figure class="fig_logo re">
		<a href="index2.php" > <img src="img/logo_freelancer.png" alt="logo" class="logo ra" ></a>
		<figcaption id="slogan">when serving becomes duty</figcaption>
		</figure>
	</div>
		<div id="announcesBar">
			
			<form action="index.php" method="get" class="login-topbar">
				<span>User:<?php if(isset($_POST['Username'])) echo $_POST['Username'] ;?></span>
				<input type="submit" name="logout" value="logout">
			</form>

	</div>
	<nav>
		<ul>
		<a href="#" id="home"><li>Home</li></a>
		<a href="our_team.php"><li>Our&nbsp;Team</li></a>
        <a href="#services"><li>Services</li></a>
		<a href="#" name="FAQ"><li>FAQ</li></a>
	</ul>
	</nav>
</header>
</div>
