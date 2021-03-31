<?php
require_once "includes/functions.php";
session_start();
session_destroy();
redirect('index.php'); // Déconnexion de la session et renvoie à la page de présentation
