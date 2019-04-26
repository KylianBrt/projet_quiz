<?php
session_start();
include 'access.php';

/* VARIABLE */
$score = $_POST['score'];
/*         */


/* AJOUT DE POINTS */
if ($_POST['question1'] == "Germinator") {
    $scoreQ1 = $score + 1;
} else {
    $scoreQ1 = 0;
}

if ($_POST['question2'] == "Le Diplodocus") {
    $scoreQ2 = $score + 1;
} else {
    $scoreQ2 = 0;
}

if ($_POST['question3'] == "Lézard Tyran") {
    $scoreQ3 = $score + 1;
} else {
    $scoreQ3 = 0;
}

if ($_POST['question4'] == "Le Brachiosaure") {
    $scoreQ4 = $score + 1;
} else {
    $scoreQ4 = 0;
}

if ($_POST['question5'] == "Le Ptérosaure") {
    $scoreQ5 = $score + 1;
} else {
    $scoreQ5 = 0;
}

if ($_POST['question6'] == "Carnivore") {
    $scoreQ6 = $score + 1;
} else {
    $scoreQ6 = 0;
}

if ($_POST['question7'] == "100 kmh") {
    $scoreQ7 = $score + 1;
} else {
    $scoreQ7 = 0;
}

if ($_POST['question8'] == "L'Ankilosaure") {
    $scoreQ8 = $score + 1;
} else {
    $scoreQ8 = 0;
}

if ($_POST['question9'] == "Le Compsognatus") {
    $scoreQ9 = $score + 1;
} else {
    $scoreQ9 = 0;
}

if ($_POST['question10'] == "Le T-rex") {
    $scoreQ10 = $score + 1;
} else {
    $scoreQ10 = 0;
}
/* FIN AJOUT DE POINTS */


/* ADDITIONS DES POINTS */
if (isset($scoreQ1) && isset($scoreQ2) && isset($scoreQ3) && isset($scoreQ4) && isset($scoreQ5) && isset($scoreQ6) && isset($scoreQ7) && isset($scoreQ8) && isset($scoreQ9) && isset($scoreQ10)) {
    $total = $scoreQ1 + $scoreQ2 + $scoreQ3 + $scoreQ4 + $scoreQ5 + $scoreQ6 + $scoreQ7 + $scoreQ8 + $scoreQ9 + $scoreQ10;
}
/* FIN ADDITION DES POINTS */

/* AJOUT PSEUDO + SCORE IN BDD */
$reponse = $bdd->prepare("INSERT INTO users (pseudo, score) VALUES(?,?)");

$reponse->execute(array($_SESSION['pseudo'], $total));
/* FIN AJOUT PSEUDO + SCORE IN BDD */
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Squeeze | Questionnaire</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Merienda" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Philosopher" rel="stylesheet">
    <link rel="icon" type="image/png" href="favicon.png" />
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <?php
    include 'navbar.php';
    ?>
    <!-- DEBUT TABLEAU DES SCORES -->
    <div class="container1 my-5" id="quiz_general">
        <?php
        echo "<p><div class='score_point'>".$total." <center>Bonnes&nbsp;réponses</center></div></p>";
        if ($total > 5) {

            printf('<div class="card_score">
                <div class="card-body">
                    <h5 class="card-title">BIENVENUE CHEZ LES CROODS</h5>
                    <p class="card-text_valid">Félicitations, super score !</p>
                    <p class="card-mutetext">Tu peux rejoindre la famille Croods</p>
                    <img class="card-img-bottom" src="http://fr.web.img2.acsta.net/r_640_360/newsv7/16/11/12/23/35/581039.jpg" alt="Card image cap">
                </div>
            </div>');
        } else {
            printf('<div class="card_score">
                <div class="card-body">
                    <h5 class="card-title">RETENTE TA CHANCE POUR REJOINDRE LES CROODS</h5>
                    <p class="card-text">Score insuffisant !</p>
                    <p class="card-mutetext">Tu ne peux pas rejoindre la famille Croods</p>
                    <img class="card-img-bottom" src="https://www.slantmagazine.com/wp-content/uploads/2013/03/croods.jpg">
                </div>
            </div>');
        }
        ?>
        <!-- FIN TABLEAU DES SCORES -->
    </div>
 <?php
 include 'graphique.php';
 ?>
</body>

</html>