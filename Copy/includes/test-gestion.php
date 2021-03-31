<?php
	require_once "functions.php";
	require("connect.php");
	$us = $_SESSION['username']; // On recupère l'identifiant de la personnes connecte
	$test="SELECT estGestionnaire FROM identifiant WHERE identifiant='$us'";
	$estGest = $BDD -> query( $test ); 										// On recupère la valuer estGestionnaire de l'utilisateur connecté
	$tuple = $estGest -> fetch();
	$u = $tuple['estGestionnaire']; // On stocke cette dernière
?>