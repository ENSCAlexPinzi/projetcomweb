<?php
	try
	{
		$BDD = new PDO( "mysql:host=localhost;dbname=id16488422_annuaireancieneleve;charset=utf8", "id16488422_gestionnaire","3oIdV[5uC@\TaU$@", array(PDO::ATTR_ERRMODE =>PDO::ERRMODE_EXCEPTION));
	// connexion serveur de BD MySql et choix base
	}
	catch (Exception $e) 
	{
		die('Erreur fatale : ' . $e->getMessage());
	}
?>
