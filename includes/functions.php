<?php

// Connect to the database. Returns a PDO object
function getDb() {

    $servername = "localhost";
    $username = "id16488422_gestionnaire";
    $password = "3oIdV[5uC@\TaU$@";
    $db = "id16488422_annuaireancieneleve";

    
    return new PDO("mysql:host=$servername;dbname=$db;charset=utf8", "$username", "$password",
    array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}

// Verifie si le compte est celui d'un gestionnaire
function estGestionnaire($u) {
    if ($u==0){
	return true ;
	} else {
	return false;
	}
}

// Vérifie si le comptes est validé
function estValide($r) {
	if ($r=="Valider"){
		return true;
	} else {
		return false;
	}
}

//retourne un identifiant personnalisé
function idgen($num,$name,$fname){
	$n=substr($name,0,1);
	$num2 = strval($num);
	return $n.$fname.$num2;
}

// Redirect to a URL
function redirect($url) {
    header("Location: $url");
}

// genère un mdp aléatoire
    function passgen($nbChar){
    return substr(str_shuffle(
'abcdefghijklmnopqrstuvwxyzABCEFGHIJKLMNOPQRSTUVWXYZ0123456789'),1, $nbChar); 
}

// Escape a value to prevent XSS attacks
function escape($value) {
    return htmlspecialchars($value, ENT_QUOTES, 'UTF-8', false);
}