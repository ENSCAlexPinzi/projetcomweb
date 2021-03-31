<?php 
require("connect.php"); // On se connecte à la Base
?>

<!DOCTYPE HTML>
	<head>
		<meta charset="utf-8">
		<title>Inscription</title>
		<script src="script.js"></script>
	</head>
<body>
	<h1> Ajout d'Expérience </h1>
	<form action="traite-experience.php" method="POST">
		<fieldset> <legend> <h4>Informations sur la Structure accueillante</h4> </legend>
			<p>
				<input type="text" name="nom"  placeholder="Nom de l'entreprise" required>
				<input type="text" name="tS" placeholder="Type de Structure (Entreprise, laboratoire, etc.)" required>
			</p>
			<p>
				<input type="text" name="adrP" placeholder="Adresse Postale" required>
				<input type="text" name="cp" placeholder="Code Postal" required>
			</p>
			<p>
				<input type="text" name="ville" placeholder="Ville">
			</p>
		</fieldset>
		</br>
		<fieldset> <legend> <h4>Informations sur le poste occupé</h4> </legend>
			<p>
				<input type="text" name="typeE" placeholder="Type de poste occupé (ex. stagiaire)" required>
				
			</p>
			<p>
				<label for="dateD"> Date de début : </label>
				<input type="date" name="dateD"  required>
				<label for="dateF"> Date de fin : </label>
				<input type="date" name="dateF" > (Opt. si toujours en cours)
			</p>
			<p>
				<input type="text" name="salaire" placeholder="Rémunération (Opt.)">
				<input type="textarea" name="descP" placeholder="Description du poste" rows="10" cols="30" required>
			</p>
			<p>
				<input type="text" name="comp" placeholder="Domaine de compétence" required>
				<input type="textarea" name="descC" placeholder="Description de la compétence" rows="10" cols="30"  required>
			</p>
			
			
		</fieldset>
		<p class="fin">
			<input class="but" type="submit" value="Envoyer"> <!-- On valide l'ajoute de l'expérience -->
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