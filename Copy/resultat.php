<?php 	
	require_once "includes/functions.php";
	require("connect.php"); // On se connecte à la base de données
?>

<html>
	<?php require_once 'includes/head.php'; ?>
	<body>
	
	<?php 
	$r = $_POST['resultat']; // On stocke la où le gestionnaire à cliqué (bouton valider ou supprimer)
	if (estValide($r)){ ?> <!-- Si c'est le boutton valider -->
		<h1> Le compte va être validé </h1>
		</br>
		</br>
		<h2> Son identifiant et son mot de passe sont les suivants : </h2>
		</br>
		<p>
		<?php
		require_once "includes/ajout-compte.php"; // On ajoute un nouveau compte à la base 
		?>
		</p>
		<h3> N'oubliez pas de les lui transmettre</h3>
		</br>
		</br>
		<div class="fin">
			<a class="btn" href="profil-gestionnaire.php">Retour au profil</a> <!-- On retourne sur le profil du gestionnaire, même si il vient de la page de la liste des élèves -->
		</div>

	<?php } else { ?>			 <!-- Si le boutton supprimer a été cliqué -->		
	<h1> Le compte va être supprimé </h1>
		<?php
		require_once "includes/delete-compte.php";  // On supprime les comptes ( et tout ce à quoi ils étaient attaché (experience, structure etc)
		?>
	<h3> Les données du compte sont maintenant supprimés </h3>
		</br>
		</br>
		<div class="fin">
			<a class="btn" href="profil-gestionnaire.php">Retour au profil</a>
		</div>
	<?php } ?>
	</body>
</html>

<style>
html{
    font-family:'Roboto';
	background-color:#F4F4F4;
   
}
h1 {
	text-align: center;
    width:20%;
    margin:0 auto;
	padding:5px;
    background-color:#9CC69B;
    color:#233D4D;
	border-radius : 20px;
}

h2{
	text-align: center;
    width:50%;
	padding:10px;
    margin:10 auto;
    background-color:#233D4D;
    color:#9CC69B;
	border-radius : 20px;
}
h3{
	text-align: center;
    width:15%;
	padding:10px;
    margin:10 auto;
    background-color:#233D4D;
    color:#9CC69B;
	border-radius : 20px;
}

.fin{
	text-align:center;
}

.btn {
	background-color:#233D4D;
    padding:5px;
    border-radius:5px;
    color:white;
    text-decoration: none;
	text-align : center;
}

p{
	font-size : 30px;
	text-align: center;
    width:50%;
    margin:0 auto;
	padding:5px;
    background-color:#9CC69B;
    color:#233D4D;
	border-radius : 20px;
}

</style>