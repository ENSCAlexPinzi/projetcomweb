<?php
require_once "./functions.php";
session_start();

// Retrieve all movies
$eleves = getDb()->query('select * from eleve'); 
?>
<!doctype html>
<html>
<body>
    <div class="container">
        <?php foreach ($eleves as $eleve) { ?>
            <article>
                <div class="row1">
                    <h4><?= $eleve['nom'] ?> <?= $eleve['prenom'] ?> (<?= $eleve['promo'] ?>)</h4>
                </div>
                <div class="row2">
                    <p><?= $eleve['adrPost'] ?></p>
                    <p><?= $eleve['cpEl'] ?> <?= $eleve['villeEl'] ?></p>
                </div>
                <div class="row3">
                    <p><?= $eleve['adrMail'] ?></p>
                    <p><?= $eleve['numTel'] ?></p>
                </div>
            </article>
        <?php } ?>

    </div>
    <div class="footer">
    
    </div>
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
    /*background-color:#9CC69B;*/
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