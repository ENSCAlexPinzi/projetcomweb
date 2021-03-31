<?php
	session_start(); // on commence un session pour en récuperer les infos plsu tard
	require_once "includes/functions.php";
	require_once 'includes/recup-num-el.php'; // On récupère le numéro de l'utilisateur connecté pour que si c'est le profil de l'utilisateur connecté, on propose plus d'options
	$lenum=$_POST['numU']; // On récupère le numéro de l'utilisateur sur le profil où on est

	$experiences = getDb()->query("select * from experiences where numU='$lenum'"); // On récupère toutes les expériences
?>

<!doctype html>
<html>
	<?php require_once 'includes/head.php'; ?>
<body>
	<header>	
		<?php require_once 'includes/header.php'; ?>
	</header>

        <?php require_once 'includes/experience.php' ?>
		
		<?php if ($N==$lenum){?>
		<a class="navbar-brand" href="ajout-exp.php"> + Ajouter une expérience </a> <!-- si on est sur le profil de l'élève connecté, alors on peut ajouter une expérience -->
		<?php } ?>

</body>

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