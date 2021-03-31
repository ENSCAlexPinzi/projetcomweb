<?php 	
	require("connect.php"); // On se connecte à la base
	session_start();
	require_once("includes/recup-num-el.php"); // On garde le numéro de l'utilisateur connecté
	
	
	
	// Ajout de la compétence
	
	$AddComp= $BDD->prepare("INSERT INTO competence (numComp, nomComp) VALUES(:numC, :nomC)");
	
	$AjoutNumC ="SELECT * FROM competence ORDER BY numComp DESC";
	$derniereC= $BDD -> query($AjoutNumC);
	$resC = $derniereC -> fetch();
	
	$lenumC = $resC['numComp']+1;
	$lenomC = $_POST['comp'];
	
	$AddComp -> bindValue('numC', $lenumC, PDO::PARAM_INT);
	$AddComp -> bindValue('nomC', $lenomC, PDO::PARAM_STR);
	
	$AddComp -> execute();
	
	
	// Ajout de structure
	$AddStructure= $BDD->prepare("INSERT INTO structure (numStruct, nomStruct, typeStruct, adresseStruct, cpStruct, villeStruct) VALUES(:numS, :nomS, :tpS, :adrS, :cpS, :vS)");
	
	$AjoutNumS ="SELECT * FROM structure ORDER BY numStruct DESC";
	$derniereS= $BDD -> query($AjoutNumS);
	$resS = $derniereS -> fetch();
	
	$lenumS = $resS['numStruct']+1;
	$lenomS = $_POST['nom'];
	$letypeS = $_POST['tS'];	
	$ladrS = $_POST['adrP'];
	$lecpS = $_POST['cp'];
	$lavilleS = $_POST['ville'];	
	
	$AddStructure -> bindValue('numS', $lenumS, PDO::PARAM_INT);
	$AddStructure -> bindValue('nomS', $lenomS, PDO::PARAM_STR);
	$AddStructure -> bindValue('tpS', $letypeS, PDO::PARAM_STR);
	$AddStructure -> bindValue('adrS', $ladrS, PDO::PARAM_STR);
	$AddStructure -> bindValue('cpS', $lecpS, PDO::PARAM_STR);
	$AddStructure -> bindValue('vS', $lavilleS, PDO::PARAM_STR);
	
	$AddStructure -> execute();	

	
	
	
	 // Ajout experience
	 
	$AddExp= $BDD->prepare("INSERT INTO experiences (numExp, dateDeb, dateFin, typePoste, descExp, salaireExp, numStruct, numComp, numU) VALUES(:numE, :daD, :daF, :tpP, :desE, :slrE, :numS, :numC, :numU)");
	
	$ajoutNumE="SELECT * FROM experiences ORDER BY numExp DESC";
	$derniereE = $BDD -> query( $ajoutNumE );
	$resE = $derniereE -> fetch();
		
		
	$lnumE = $resE['numExp']+1;
	$ladateD = $_POST['dateD'];
	$ladateF = $_POST['dateF'];
	$letypeP =$_POST['typeE'];
	$descE = $_POST['descP'];
	$salE = $_POST['salaire'];
	if (empty($salE)){
	    $salE=0;
	}                               // Si ces deux champs qui peuvent être laissé vide le sont, alors ils prennent une valeur par défaut lisable par le programme
	if (empty($ladateF)){
	    $ladateF='0000-00-00';
	}
	
	$AddExp -> bindValue('numE', $lnumE, PDO::PARAM_INT);
	$AddExp -> bindValue('daD', $ladateD, PDO::PARAM_STR);
	$AddExp -> bindValue('daF', $ladateF, PDO::PARAM_STR);
	$AddExp -> bindValue('tpP', $letypeP, PDO::PARAM_STR);	
	$AddExp -> bindValue('desE', $descE, PDO::PARAM_STR);
	$AddExp -> bindValue('slrE', $salE, PDO::PARAM_STR);
	$AddExp -> bindValue('numS', $lenumS, PDO::PARAM_STR);	
	$AddExp -> bindValue('numC', $lenumC, PDO::PARAM_INT);
	$AddExp -> bindValue('numU', $N, PDO::PARAM_INT);	
	
	$AddExp -> execute();
?>

<html>

	<h1> Experience ajoutée </h1>
	<p> 
		Vous pouvez retourner sur votre Profil
		<form method="POST" action="profil-eleve.php">
			<input type="hidden" name="numU" value="<?= $N ?>">
			<input class="btn" type="submit" name="profil" value="Retour au profil"> <!-- L'élève revient sur son profil -->
		</form>
	</p>
</html>

<style>

h1 {
	text-align: center;
    width:30%;
    margin:0 auto;
	padding : 5px;
    background-color:#9CC69B;
    color:#233D4D;
	border-radius : 20px;
	font-size : 100px;
}

p {
    width:30em;
    background-color:#79B4A9;
    height:auto;
    display:flex;
    flex-direction:column;
    margin: 5em auto;
	font-size : 50px;
	border-radius : 20px;
	padding : 5px;
}

html{
    font-family:'Roboto';
	background-color:#F4F4F4;
   
}
.btn{
    background-color:#233D4D;
    padding:5px;
    border-radius:100px;
    color:white;
    text-decoration: none;
	text-align : center;
} 
</style>
