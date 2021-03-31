<!DOCTYPE HTML>
 	<head>
		<meta charset="utf-8">
		<title>Inscription</title>
		<script src="script.js"></script>
	</head>
<body>
	<h1> Inscription par Gestionnaire </h1> <!-- Le formulaire d'inscription avec toutes les données de la table de BDD correspondant-->
	<form action="traite-inscription2.php" method="POST">
	<?php require_once("includes/inscription-eleve.php") ?>
		<p class="fin">
			<input class="but" type="submit" value="Envoyer">
			<input class="but" type="button" value="Retour au menu" onclick="location.href='profil-gestionnaire.php';"> <!-- Soit le gestionnaire valide son inscription et envoie les données, soit il retourne à son profil-->
		</p>
	</form>
</body>


<style>

html{
    font-family:'Roboto';
	background-color:#F4F4F4;
   
}
h1 {
	text-align: center;
        background-color:blue;
        width:20%;
        margin:0 auto;
		padding:10px;
        background-color:#9CC69B;
        color:#233D4D;
		border-radius : 20px;
}

fieldset {
  border-radius: 10px;
  background-color:#79B4A9;
}

.fin {
	text-align : center;
}

legend {
	font-weight : bold;
	background-color:#9CC69B;
	border-radius : 20px;
}

.but {
	    background-color:#233D4D;
        padding:5px;
        border-radius:5px;
        color:white;
        text-decoration: none;
}


</style>