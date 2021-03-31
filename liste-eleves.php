<?php
require_once "includes/functions.php";
require("connect.php");
session_start(); 
$eleves = getDb()->query('select * from utilisateur where valide=1'); // On selectionne tous les élèves présent dans la table utilisateur et qui ont été validé
$testG = getDb()->query('select * from identifiant where estGestionnaire=0'); // On selectionne tous les compte déjà existant dans la BDD pour plus tard


?>
<!doctype html>
<html>
	<?php require_once 'includes/head.php'; ?>
<body>
	<header>	
		<?php require_once 'includes/header.php'; ?>
	</header>

        <?php require_once 'includes/eleves.php' ?>
</body>

</html>


<style>
html{
    font-family:'Roboto';
 	background-color:#F4F4F4;  
}


article{
    display:flex;
    justify-content:center;
    vertical-align: baseline;
}

.row1,.row2,.row3{
    margin:0.1em 0.1em;
    text-align:center;
    width:100%;
}

article:nth-child(even){
    background-color:#9CC69B;
}

article:nth-child(odd){
    background-color:#acc9ab;
}


</style>