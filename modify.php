		<title>modifydata</title>
		<section>
				<?php
			  require_once 'baseDonnees.php'; 
	require ("fonctionConnexion.ph");
	$connexion = connexion(SERVEUR, NOM_SERVEUR, MOT_PASSE, NOM_BASE);

			//récupération de tous les enregistrements de la table utilisateurs
	$display_result = mysql_query("select * from adviser  where email='" . $_GET["email"] . "'", $connexion);
	if($dislay_result){
		echo "<h1>Utilisateur</h1>\n";
		$user = mysql_fetch_array($display_result);
		// récupération de chaque ligne et affichage dans un tableau HTML
		echo "<form action='report.php' method='post'>";
		echo "<table border='1'>\n";
		echo "<tr>\n";
		echo "<td><strong>Firstname</strong></td>\n";
		echo "<td><input type='text' name='firstname' value='" . $user["firstname"] . "' /></td>\n";		
		echo "</tr>\n";
		echo "<tr>\n";
		echo "<td><strong>Lastname</strong></td>\n";
		echo "<td><input type='text' name='lastname' value='" . $user["lastname"] . "' /></td>\n";		
		echo "</tr>\n";
		echo "<tr>\n";
		echo "<td><strong>Email</strong></td>\n";
		echo "<td><input type='text' name='email' value='" . $user["email"] . "' /></td>\n";		
		echo "</tr>\n";
		echo "<tr>\n";
		echo "<td><strong>Sexe</strong></td>\n";
		echo "<td><input type='text' name='civil' value='" . $user["civil"] . "' /></td>\n";		
		echo "</tr>\n";
		echo "<tr>\n";
		echo "<td><strong>Country</strong></td>\n";
		echo "<td><input type='text' name='pays' value='" . $user["pays"] . "' /></td>\n";		
		echo "</tr>\n";
		echo "<tr>\n";
		echo "<td><strong>Phone</strong></td>\n";
		echo "<td><input type='text' name='phone' value='" . $user["phone"] . "' /></td>\n";		
		echo "</tr>\n";
		echo "<tr>\n";
		echo "<td><strong>Age</strong></td>\n";
		echo "<td><input type='text' name='age' value='" . $user["age"] . "' /></td>\n";		
		echo "</tr>\n";		
		echo "<tr>\n";
		echo "<td><strong>Comment</strong></td>\n";
		echo "<td><input type='text' name='comment' value='" . $user["comment"] . "' /></td>\n";		
		echo "</tr>\n";
		echo "</table>\n";
		echo "</br>\n";
		echo "<input type='hidden' name='emailOrigine' value='" . $_GET["email"] . "'  />\n";
		echo "<input type='submit' name='modify' value='modify'  />\n";
		echo "</form>";		
	}else{
	echo "error in the execution of your request</br>";
		echo "the error is : " . mysql_error($connexion);
	
	}

	
?>

		</section>
