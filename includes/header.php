<?php
	require_once 'recup-num-el.php'; // On récupère l'Id de l'utilisateur connecté
	require_once 'test-gestion.php'; // On vérifie le statut du compte
?>
		<nav class="navbar  navbar-dark bg-success">
		<?php if (estGestionnaire($u)) { ?>
			<a class="navbar-brand" href="profil-gestionnaire.php">Profil</a>	
			<a class="navbar-brand" > Bonjour, vous êtes connecté en tant que gestionnaire </a>
		<?php } else { ?>
			<form method="POST" action="profil-eleve.php">
				<input type="hidden" name="numU" value="<?= $N ?>">
				<input class="profil" type="submit" name="profil" value="Profil">
			</form>
			<a class="navbar-brand"> Bonjour, vous êtes connecté en tant qu'étudiant </a>
         <?php } ?>

			<a class="navbar-brand" href="liste-eleves.php"> Liste des étudiants </a>
			<a class="navbar-brand" href="./logout.php"> Se déconnecter </a>
		</nav>
		
		
<style>
.profil{
	border-radius:10px;
	background-color:#729C69;
	font-size:30px;

}
</style>
