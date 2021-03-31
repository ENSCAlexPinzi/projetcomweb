<!-- Page de présentation, on laisse le choix à l'utilisateur comment il veut continuer-->

<html>
<div class="row0">
<h1>Annuaire des élèves</h1>
</div>
<div class="wrapper">
    <div class="row1">
    <h2>Elève</h2>
    </div>
    <div class="row2">
        <a class="btn" href="./connexion-eleve.php">  <!-- C'est un élève avec un identifiant et mot de passe-->
            Se connecter
        </a>
    </div>
    <div class="row3">
        <a class="btn" href="./inscription-eleve1.php"> <!-- C'est un élève qui souhait s'inscrire-->
            S'inscrire
        </a>
    </div>
    <div class="row4">
        <h2>Gestionnaire</h2>
    </div>
    <div class="row5">
        <a class="btn" href="./connexion-gestionnaire.php"> <!--C'est un gestionnaire qui souhaite se connecter-->
            Se connecter
        </a>
    </div>
</div>
<style>

    html{
        font-family:'Roboto';
        background-color:#F4F4F4;
    }

    .row0{
        background-color:blue;
        width:25%;
        margin:0 auto;
        background-color:#9CC69B;
        color:#233D4D;
		border-radius : 20px;
    }

    h1{
        text-align:center;
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

    h2{
        background-color:#9CC69B;
        color:#233D4D;
        padding: 5px;
		border-radius : 5px;
    }

    .row1, .row2, .row3, .row4, .row5{
        margin: 1em auto;
    }

    .btn,button{
        background-color:#233D4D;
        padding:5px;
        border-radius:5px;
        color:white;
        text-decoration: none;
    } 
    
</style>
</html>