<?php 
require_once 'test-gestion.php'; // On vérifie si le compte est gestionnaire
require("connect.php"); // Connexion à la Base
$url = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];


?>
	   <?php foreach ($experiences as $exp) {?> <!-- On parcourt toutes les expériences disponibles -->
            <article>
				<?php
					$numUe=$exp['numU']; // On récupère le numéro de l'utilisateur liée à l'expérience séléctionnée

					if ($lenum == $numUe) { // On vérifie si le numéro du profil où on est le meme que l'experience est si oui on fait ce qui suit
						$numStruct=$exp['numStruct'];
						$GetStruct= ("SELECT * FROM structure WHERE numStruct='$numStruct'");	 
						$GS=$BDD->query($GetStruct);
						$GetS= $GS -> fetch();  // On récupère les propriétées de la structure de l'experience en cours 
							
						$nomS = $GetS['nomStruct'];
						$type =$GetS['typeStruct'];
						$adrS = $GetS['adresseStruct'];
						$cpS = $GetS['cpStruct'];
						$vS = $GetS['villeStruct']; // On assigne toutes les données
						
						$numComp=$exp['numComp'];
						$GetComp= ("SELECT * FROM competence WHERE numComp='$numComp'");	
						$GC=$BDD->query($GetComp);
						$GetC= $GC -> fetch();
						$nomC =$GetC['nomComp']; // On fait pareil que précedemment mais pour les propriétées de competence
						
						
						$dateF=$exp['dateFin']; // on récupère la date de fin au cas où elle serait nulle
						$slrE=$exp['salaireExp']; // Idem pour salaire
					}
				?>
                <div class="row1">
					</br>
                    <h4><h3><?= $nomS ?> </h3>
						<p>
						<?php if ($dateF=='0000-00-00') { ?>
						Depuis le <?= $exp['dateDeb'] ?>
						<?php } else { ?>
						Du <?= $exp['dateDeb'] ?> au <?= $dateF ?>
						<?php } ?>
						<?php if (!empty($slrE)) { ?>
						</br>
						Rémunération : <?= $slrE ?> €
						<?php } ?>
						</p>
					</h4>
                </div>
                <div class="row2">
					</br>
                    <p><h3><?= $type ?></h3></p>
                    <p><h5>Adresse:</h5> <?= $adrS ?>, <?= $vS ?>, <?= $cpS ?></p>
                </div>
                <div class="row3">
					</br>
					<p> <h2>Compétence</h2> </p>
                    <p><h3><?= $nomC ?></h3></p>        
                </div>
            </article>
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