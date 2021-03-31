<?php
	require("connect.php"); // Connexion à la base
	require_once('includes/traite-inscription.php'); // On traite l'inscription
?>

<html>

	<h1> Inscription finie </h1>
	<p> 
		L'inscription à été effectué
		</br>
		Vous pouvez maintenant valider le compte depuis votre profil
		<a class="btn" href="profil-gestionnaire.php">Retour <=</a> <!-- On revient à la page du profil du gestionnaire -->
	</p>
</html>

<style>

h1 {
	text-align: center;
    width:30%;
    margin:0 auto;
	padding : 5px;
    background-color:#9CC69B;
    color:#233D4D;
	border-radius : 20px;
	font-size : 100px;
}

p {
    width:30em;
    background-color:#79B4A9;
    height:auto;
    display:flex;
    flex-direction:column;
    margin: 5em auto;
	font-size : 50px;
	border-radius : 20px;
	padding : 5px;
}

html{
    font-family:'Roboto';
	background-color:#F4F4F4;
   
}
.btn{
    background-color:#233D4D;
    padding:5px;
    border-radius:100px;
    color:white;
    text-decoration: none;
	text-align : center;
} 
</style>
