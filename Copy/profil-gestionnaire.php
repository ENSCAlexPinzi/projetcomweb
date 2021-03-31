<?php
require_once "includes/functions.php";
session_start(); 

$eleves = getDb()->query('select * from utilisateur where valide=0');  // On récupère tous les profils non validés

$testG = getDb()->query('select * from identifiant where estGestionnaire=1');  // On récupère les comptes non gestionnaire

	 
?>

<html>
	<?php require_once 'includes/head.php'; ?>
	
	<body>
	<?php require_once 'includes/header.php'; ?>
	<p>
	<h1> Voici la listes des inscriptions en attentes : </h1>
	</p>
	<p>
	<?php require_once 'includes/eleves.php'; ?>
	</p>
	<a class="navbar-brand" href="inscription-eleve2.php"> + Ajouter un élève </a> <!-- Le gestionnaire peut inscrire un élève -->
	</body>

</html>

<style>
html{
    font-family:'Roboto';
	background-color:#F4F4F4;
}

h1{
	text-align:center;
	background-color:#79B4A9;
	padding:5px;
	margin:0;

}
</style>
