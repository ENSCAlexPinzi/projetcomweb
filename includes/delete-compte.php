<?php

	$numE = $_POST['numU']; // On recup le num de l'utilisateur concerné
	$RecupInfoU =getDb()->query("SELECT * FROM experiences where numU='$numE'"); // on récupère toutes ces expériences
	
	foreach ($RecupInfoU as $InfosU) { // On parcourt toutes ces expériences
		if (empty($InfosU)) {} // Si il y a au moins une expériences, on rentre dans le else
		else {

			$numS = $InfosU['numStruct'];
			$numC = $InfosU['numComp'];
			$numU = $InfosU['numU'];	// On récupère la structure , la compétence et le num de l'utilisateur liés ) l'experience
	
			$SupprExpe = $BDD -> prepare("DELETE FROM experiences WHERE numU=:numU");
			$SupprExpe -> bindParam('numU', $numU, PDO::PARAM_INT);
			$SupprExpe -> execute(); // on supprime l'experience
			
	
			$SupprStruct = $BDD -> prepare("DELETE FROM structure WHERE numStruct=:numS");
			$SupprStruct -> bindParam('numS', $numS, PDO::PARAM_INT);
			$SupprStruct->execute(); // On supprime la structure
	
			$SupprCompe = $BDD -> prepare("DELETE FROM competence WHERE numComp=:numC");
			$SupprCompe -> bindParam('numC', $numC, PDO::PARAM_INT);
			$SupprCompe->execute(); // On supprime la compétence

		}
	}

	$SupprCompte=$BDD->prepare("DELETE FROM identifiant WHERE numU=:num ");
	$SupprCompte -> bindParam('num', $numE,PDO::PARAM_INT);
	$SupprCompte->execute();	 // On supprime les options de connexion de l'utilisateurs
		
		
	$SupprDonnées=$BDD->prepare("DELETE FROM utilisateur WHERE numU=:num ");
	$SupprDonnées -> bindParam('num', $numE,PDO::PARAM_INT);
	$SupprDonnées->execute(); // On supprime l'utilisateur de la table utilisateur


?>