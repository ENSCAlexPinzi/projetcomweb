<?php 	
	require_once 'test-gestion.php';
	require("connect.php");
	$url = "https://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']; // on Recupère l'url de la page
?>
	   <?php 
			foreach ($eleves as $eleve) {  // On parcourt tous les utilisateur
				$numE=$eleve['numU']; // On recupère le numéro de l'utilsateur actuel dans la boucle
				if (empty($eleve)) {} // On vérifie qu'il ne soit pas vide
				else {

		?>
		
			<article>
				<div class="row1">
					</br>
					<h4> 
						<form method="POST" action="profil-eleve.php">
							<input type="hidden" name="numU" value="<?= $numE ?>">
							<input class="profil" type="submit" name="profil" value="<?= $eleve['nom'] ?> <?= $eleve['prenom'] ?>"
							<p>
								</br>
								(<?= $eleve['promo'] ?>)
							</p>
						</form>
					</h4>
				</div>
				<div class="row2">
					</br>
					<?php if (estGestionnaire($u)) { ?>
						<p><?= $eleve['adrPost'] ?></p>
						<p><?= $eleve['cpU'] ?> <?= $eleve['villeU'] ?></p>
					<?php } ?>
				</div>
				<div class="row3">
					</br>
					<p><?= $eleve['adrMail'] ?></p>
					<p><?= $eleve['numTel'] ?></p>
				</div>
					<form method="POST" action="resultat.php">
						<input type="hidden" name="numU" value="<?= $numE ?>"> 
						</br>
						<?php if (estGestionnaire($u)) { ?>
						<?php if ($url=="https://annuaireensc-baietto-pinzi.000webhostapp.com/profil-gestionnaire.php") { ?>  <!-- L'option validé n'est disponible que sur le profil du gestionnaire -->
							<input class="butV" type="submit" name="resultat" value="Valider">
						<?php } ?>
							<input class="butS" type="submit" name="resultat" value="Supprimer">
						<?php } ?>
					</form>	
			</article>
					<?php  } ?>
        <?php } ?>
<style>
html{
    font-family:'Roboto';
	background-color:#F4F4F4; 
}

article{
    display:flex;
    justify-content:center;
    vertical-align: baseline;
	margin:0px;
}

.row1,.row2,.row3{
    margin:0.1em;
    text-align:center;
    width:100%;
}

article:nth-child(even){
    background-color:#9CC69B;
}

article:nth-child(odd){
    background-color:#acc9ab;
}

.profil{
	border-radius:10px;
	background-color:#7;

}


.butV,.butS{
	border-radius:5px;
	width:100px;
	margin-right : 10px;
}

.butV{
	background-color : green;
	padding-top : px;
}
.butS{
	background-color : red;
}

</style>