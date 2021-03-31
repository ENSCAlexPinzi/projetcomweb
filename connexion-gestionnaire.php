<?php
	require_once "includes/functions.php";
	session_start();  
	$error;
	// On vérifie que le compte existe et qu'il est soit bien un gestionnaire
	if(!empty($_POST['username']) && !empty($_POST['password'])){
		$username = $_POST['username'];
		$password = $_POST['password'];
		$checklogin = getDb()->prepare("SELECT * FROM identifiant WHERE identifiant =? AND motdepasse = ? AND estGestionnaire = 0");
		$checklogin->execute(array($username, $password));

		if($checklogin->rowCount() == 1)
		{
			$_SESSION['username'] = $username;
			redirect("liste-eleves.php");
		}
		else {
			$error = "Identifiant ou mot de passe incorrect.";
		}

	}
?>

<html>
	<head>
		<title>Connexion Gestionnaire</title>
	</head>
	</body>
		<div class="row0">
		<h1>Gestionnaire</h1>
		</div>
		<div class="wrapper">
			<div class="row1">
				<h2>Connexion</h2>
			</div>
			<?php if (isset($error)) { ?>
			<div class="row15">
				<strong>Erreur : </strong> <?= $error ?>
			</div>
			<?php } ?>
			<div class="row2">
				<form action="" method="post">
						<div class="row21">
						<label for="username"><b>Gestionnaire</b></label>
						<br>
						<input type="text" placeholder="Entrer l'identifiant" name="username" required>
						</div>
						<div class="row22">
						<label for="password"><b>Mot de passe</b></label>
						<br>
						<input type="password" placeholder="Entrer le mot de passe" name="password" required>
						</div>
						<div class="row23">
						<button type="submit"><a>Connexion</a></button>
						</div>
				</form>
			</div>
			<div class="row3">
				<a class="btn" href="index.php">Retour <=</a>
			</div>
		</div>
	</body>
</html>

<style>
    html{
        font-family:'Roboto';
        background-color:#F4F4F4;
    }

    .row0{
        background-color:blue;
        width:30%;
        margin:0 auto;
        background-color:#9CC69B;
        color:#233D4D;
		border-radius : 20px;
        }

    h1{
        text-align:center;
		border-radius : 20px;
    }

    h2, label{
        background-color:#9CC69B;
        color:#233D4D;
        padding: 5px;
		border-radius : 5px;
    }

    input{
        margin-top:5px;
    }

    .wrapper{
        width:30em;
        background-color:#79B4A9;
        height:auto;
        display:flex;
        flex-direction:column;
        margin: 5em auto;
		border-radius : 20px;
    }
    .row1, .row15, .row2{
        margin: 1em auto;
    }

    .row15{
        color:#233D4D;
    }

    form {
        display:flex;
        flex-direction : column;
    }

    .row21, .row22, .row23{
        margin-top: 1em;
        flex-direction: column;
    }

    .row23{
        text-align:right;
    }

    button{
        border: 0;
    }

    .btn,button{
        background-color:#233D4D;
        padding:5px;
        border-radius:5px;
        color:white;
        text-decoration: none;
       } 
</style>