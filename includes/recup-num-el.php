<?php
	require_once "functions.php";
	require("connect.php");
	$us = $_SESSION['username']; // On récupère le l'identifiant de l'utilisateur connecté
	$test="SELECT numU FROM identifiant WHERE identifiant='$us'";  //
	$getNum = $BDD -> query( $test );							   // On récupère le numéro d'utilisateur correspond au compte connecté
	$tuple = $getNum -> fetch();								   //
	$N = $tuple['numU']; // On attribue cette valuer à un variable
?>