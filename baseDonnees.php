<?php
	// DB connexion
/*
$bdd = new PDO("mysql:host=localhost;dbname=bitdiamonds;charset=utf8","root","");
$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
*/

define ('NOM_SERVEUR',"root");
define ('MOT_PASSE', "");
define ('SERVEUR', "127.0.0.1");
define ('NOM_BASE', "bitdiamonds");

/*
$connexion = mysql_pconnect (SERVEUR, NOM_SERVEUR, MOT_PASSE);
	// testing connexion 
	if(!$connexion) {
		echo "unable to connect to MySQL server";
		exit;
	}
	// testing DB access
	if(!mysql_select_db(NOM_BASE, $connexion)) {
		echo "unable to access the Data Base";
		exit;
	}
	
	echo "successfully connected to the DB"*/
?>
