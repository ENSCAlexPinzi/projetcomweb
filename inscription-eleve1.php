<!DOCTYPE HTML>
 	<head>
		<meta charset="utf-8">
		<title>Inscription</title>
		<script src="script.js"></script>
	</head>
<body>
	<form action="traite-inscription1.php" method="POST">
	<?php require_once("includes/inscription-eleve.php") ?>
		<p class="fin">
			<input class="but" type="submit" value="Envoyer">
			<input class="but" type="button" value="Retour au menu" onclick="location.href='index.php';"> <!-- Soit l'utilsateur valide son inscription et envoie les données, soit il retourne à la page de présentation-->
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