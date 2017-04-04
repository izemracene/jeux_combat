<?php
function connexionBD($dbname){
	// paramètres de connexion
	$host='localhost';
	$sgbdname='mysql';
	$username = 'root';
	$password = '';
	$charset='utf8';
	
	// dsn : data source name
	$dsn = $sgbdname.':host='.$host.';dbname='.$dbname.';charset='.$charset;

	// On émet une alerte à chaque fois qu'une requête a échoué.
	$erreur = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING); 

	try {
	    $pdo = new PDO($dsn, $username, $password, $erreur);
	} catch (PDOException $e) {
	    die ('Connexion échouée : ' . $e->getMessage() );
	}
	return $pdo;
}
