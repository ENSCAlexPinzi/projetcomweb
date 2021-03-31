<?php 	
	require("connect.php"); // Connexion à la base
	$requete= $BDD->prepare("INSERT INTO utilisateur (numU, nom, prenom, promo, adrPost, cpU, villeU, 
	adrMail, numTel, sexe) VALUES(:nE, :no, :pre, :pro, :aP, :cp, :vil, :aM, :num, :s)"); // on se prepare à ajouter une nouvelle ligne
		
	$primary="SELECT * FROM utilisateur ORDER BY numU DESC";
	$dernierecle = $BDD -> query( $primary );
	$tuple = $dernierecle -> fetch(); // On récupère la clé primaire de la table utilisateur avec la plus grande valuer
		
	$lnE = $tuple['numU']+1; // On ajoute 1 à la plus grande clé primaire et on lui assigne le nouvel utilisateur
	$ln = $_POST['nom'];
	$lpre = $_POST['prenom'];
	$lpro =$_POST['promo'];
	$laP = $_POST['post'];
	$lcp = $_POST['cposte'];
	$lvil=$_POST['ville'];
	$laM = $_POST['mail'];
	$lnum = $_POST['phone'];
	$ls =$_POST['sexe']; // On prépare tout le jeu de données
	
	$requete -> bindValue('nE', $lnE, PDO::PARAM_INT);
	$requete -> bindValue('no', $ln, PDO::PARAM_STR);
	$requete -> bindValue('pre', $lpre, PDO::PARAM_STR);
	$requete -> bindValue('pro', $lpro, PDO::PARAM_INT);	
	$requete -> bindValue('aP', $laP, PDO::PARAM_STR);
	$requete -> bindValue('cp', $lcp, PDO::PARAM_STR);
	$requete -> bindValue('vil', $lvil, PDO::PARAM_STR);	
	$requete -> bindValue('aM', $laM, PDO::PARAM_STR);
	$requete -> bindValue('num', $lnum, PDO::PARAM_STR);
	$requete -> bindValue('s', $ls, PDO::PARAM_STR);	 //On les attache aux colonnes correspondantes
	
	$requete -> execute(); // On ajoute la ligne
?>
