<?php
	$lenum=$_POST['numU']; //On recupère le numéro de l'utilisateur concerné
	
	$v =1; // On prepare  à valider le compte
	
	$chngtValid= $BDD->prepare("UPDATE utilisateur SET valide = :v WHERE numU='$lenum' ");
	$chngtValid -> bindParam('v', $v, PDO::PARAM_INT);
	$chngtValid -> execute();
	$reqNum = "SELECT numU FROM utilisateur WHERE numU='$lenum'"; 
	$Num = $BDD -> query( $reqNum );
	$NumF = $Num -> fetch(); // On change la colonne valide dans utilisateur pour marquer que le compte à été validé par le gestionnaire

	// On recupère le nom de l'utilisateur
	$reqNom = "SELECT nom FROM utilisateur WHERE numU='$lenum'";
	$Nom = $BDD -> query( $reqNom );
	$NomF = $Nom -> fetch();

	// On recupère le prénom de l'utilisateur
	$reqPre = "SELECT prenom FROM utilisateur WHERE numU='$lenum'";
	$Pre = $BDD -> query( $reqPre );
	$PreF = $Pre -> fetch();

	$NU = $NumF['numU'];
	$NO = $NomF['nom'];
	$PR = $PreF['prenom']; // On assigne les valeurs


	$id = idgen($NU,$NO,$PR); // On crée l'identifiant 
	$pass=passgen(10);		  // On crée le mot de passe
		
	$AddCompte = $BDD -> prepare("INSERT INTO identifiant (numId, identifiant, motdepasse, numU) VALUES (:nI, :Id, :mdp, :nU)");
	// On prépare à ajouter les données du compte
	$req="SELECT * FROM identifiant ORDER BY numId DESC";
	$derniernum = $BDD -> query( $req );
	$tuple = $derniernum -> fetch();
	
	$nid = $tuple['numId']+1; // On rajoute 1 au numId le plus grand pour eviter toutes duplications
	
	$AddCompte -> bindValue('nI', $nid, PDO::PARAM_INT);
	$AddCompte -> bindValue('Id', $id, PDO::PARAM_STR);
	$AddCompte -> bindValue('mdp', $pass, PDO::PARAM_STR);
	$AddCompte -> bindValue('nU', $NU, PDO::PARAM_INT);
	// On assigne les valeues
	$AddCompte -> execute();
	// On Crée la table
	echo "Identifiant :".$id ;
	echo '  /  ';
	echo "Mot de passe :".$pass; // On affiche l'identifiant et le mot de passe pour que le gestionnaire le note
?>