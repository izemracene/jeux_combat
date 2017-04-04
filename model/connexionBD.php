<?php
function connexionBD($dbname){
	// param�tres de connexion
	$host='localhost';
	$sgbdname='mysql';
	$username = 'root';
	$password = '';
	$charset='utf8';
	
	// dsn : data source name
	$dsn = $sgbdname.':host='.$host.';dbname='.$dbname.';charset='.$charset;

	// On �met une alerte � chaque fois qu'une requ�te a �chou�.
	$erreur = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING); 

	try {
	    $pdo = new PDO($dsn, $username, $password, $erreur);
	} catch (PDOException $e) {
	    die ('Connexion �chou�e : ' . $e->getMessage() );
	}
	return $pdo;
}
