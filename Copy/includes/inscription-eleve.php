<!DOCTYPE HTML>
 	<head>
		<meta charset="utf-8">
		<title>Inscription</title>
		<script src="script.js"></script>
	</head>
<body>
		<fieldset> <legend> <h2>Informations Personnelles</h2> </legend>
			<p>
				<input type="text" name="nom" id="name" placeholder="Nom" required>
				<input type="text" name="prenom" id="prenom" placeholder="Prénom" required>
			</p>
			<p>Sexe:
				<input type="radio" name="sexe" value="Homme" required>
				<label for="sexe">Homme </label>
				<input type="radio"name="sexe" value="Femme">
				<label for="sexe">Femme </label>
				<input type="radio"name="sexe" value="Autre">
				<label for="sexe">Autre </label>
			</p>
			<p>
				<input type="number" name="promo" id="promo" placeholder="Promotion" min=2000 max=3000 required>
				<input type="mail" name="mail" id="mail" placeholder="Adresse Mail" required>
			</p>
			<p>
				<input type="text" name="phone" id="phone" placeholder="Numéro de téléphone">
			</p>
		</fieldset>
		</br>
		<fieldset> <legend> <h2>Informations Géographiques</h2> </legend>
			<p>
				<input type="text" name="post" id="post" placeholder="Adresse Postale" required>
				
			</p>
			<p>
				<input type="text" name="ville" id="ville" placeholder="Ville" required>
				<input type="text" name="cposte" id="cposte" placeholder="Code Postal" required>
			</p>
					
		</fieldset>
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