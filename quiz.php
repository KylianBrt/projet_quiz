<!DOCTYPE html>
<html lang="fr">

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

<body class="quiz_general">
    <?php
    include "access.php";
    include "navbar.php";
    ?>

    <form method="post" action="traitement.php">
        <div class="container1 my-5" id="quiz_general">
            <div class="row">
                <div class="question_general">
                    <u>
                        <h3>QUESTION 1<h3>
                    </u>
                    Lequel de ces dinosaures n'a jamais existé?<br><br>
                    <!-- Germinator -->
                    <input type="radio" name="question1" value="L'Iguanodon" id="dinosaure">
                    <label for="L'Iguanodon"> L'Iguanodon </label><br>
                    <input type="radio" name="question1" value="Le Tyrannosaure" id="dinosaure">
                    <label for="Le Tyrannosaure"> Le Tyrannosaure </label><br>
                    <input type="radio" name="question1" value="Le Vélociraptor" id="dinosaure">
                    <label for="Le Vélociraptor"> Le Vélociraptor </label><br>
                    <input type="radio" name="question1" value="Germinator" id="dinosaure">
                    <label for="Germinator"> Germinator </label><br>
                </div>
            </div>

            <div class="row">
                <div class="question_general">
                    <u>
                        <h3>QUESTION 2<h3>
                    </u>
                    Lequel de ces dinosaures était le plus grand?<br><br>
                    <!-- Le Diplodocus -->
                    <input type="radio" name="question2" value="Le Compsognatus" id="dinosaure">
                    <label for="Le Compsognatus Triacicus"> Le Compsognatus</label><br>
                    <input type="radio" name="question2" value="Le Diplodocus" id="dinosaure">
                    <label for="Le Diplodocus"> Le Diplodocus </label><br>
                    <input type="radio" name="question2" value="Le Vélociraptor" id="dinosaure">
                    <label for="Le Vélociraptor"> Le Vélociraptor </label><br>
                    <input type="radio" name="question2" value="Le Platéosaure" id="dinosaure">
                    <label for="Le Platéosaure"> Le Platéosaure </label><br>
                </div>
            </div>

            <div class="row">
                <div class="question_general">
                    <u>
                        <h3>QUESTION 3<h3>
                    </u>
                    Que signifie Tyrannosaurus-rex?<br><br>
                    <!-- Lézard Tyran -->
                    <input type="radio" name="question3" value="Lézard méchant" id="dinosaure">
                    <label for="Lézard méchant"> Lézard méchant </label><br>
                    <input type="radio" name="question3" value="Gros lézard" id="dinosaure">
                    <label for="Gros lézard"> Gros lézard </label><br>
                    <input type="radio" name="question3" value="Lézard de Tyrannie" id="dinosaure">
                    <label for="Lézard de Tyrannie"> Lézard de Tyrannie </label><br>
                    <input type="radio" name="question3" value="Lézard Tyran" id="dinosaure">
                    <label for="Lézard Tyran"> Lézard Tyran </label><br>
                </div>
            </div>

            <div class="row">
                <div class="question_general">
                    <u>
                        <h3>QUESTION 4<h3>
                    </u>
                    Lequel de ces dinosaures avait le plus grand cou?<br><br>
                    <!-- Le Brachiosaure -->
                    <input type="radio" name="question4" value="Le Brachiosaure" id="dinosaure">
                    <label for="Le Brachiosaure"> Le Brachiosaure </label><br>
                    <input type="radio" name="question4" value="Le Tyrannosaure" id="dinosaure">
                    <label for="Le Tyrannosaure"> Le Tyrannosaure </label><br>
                    <input type="radio" name="question4" value=" Le Vélociraptor" id="dinosaure">
                    <label for=" Le Velociraptor"> Le Vélociraptor </label><br>
                    <input type="radio" name="question4" value="Le Galliminus" id="dinosaure">
                    <label for="Le Galliminus"> Le Galliminus </label><br>
                </div>
            </div>

            <div class="row">
                <div class="question_general">
                    <u>
                        <h3>QUESTION 5<h3>
                    </u>
                    Lequel de ces dinosaures existait?<br><br>
                    <!-- Le Ptérosaure -->
                    <input type="radio" name="question5" value="Le Ptérosaure" id="dinosaure">
                    <label for="Le Ptérosaure"> Le Ptérosaure </label><br>
                    <input type="radio" name="question5" value="Le Cacanosaure" id="dinosaure">
                    <label for="Le Cacanosaure"> Le Cacanosaure </label><br>
                    <input type="radio" name="question5" value="Le Pipinosaure" id="dinosaure">
                    <label for="Le Pipinosaure"> Le Dragonosaure </label><br>
                    <input type="radio" name="question5" value="Le Paproprenosaure" id="dinosaure">
                    <label for="Le Paproprenosaure"> Le Paproprenosaure </label><br>
                </div>
            </div>

            <div class="row">
                <div class="question_general">
                    <u>
                        <h3>QUESTION 6<h3>
                    </u>
                    Le Tyrannosaure était?<br><br>
                    <!-- Carnivore -->
                    <input type="radio" name="question6" value="Herbivore" id="dinosaure">
                    <label for="Herbivore"> Herbivore </label><br>
                    <input type="radio" name="question6" value="Carnivore" id="dinosaure">
                    <label for="Carnivore"> Carnivore </label><br>
                    <input type="radio" name="question6" value="Omnivore" id="dinosaure">
                    <label for="Omnivore"> Omnivore </label><br>
                    <input type="radio" name="question6" value="Autre" id="dinosaure">
                    <label for="Autre"> Autre </label><br>
                </div>
            </div>

            <div class="row">
                <div class="question_general">
                    <u>
                        <h3>QUESTION 7<h3>
                    </u>
                    A quelle allure pouvait aller le Vélociraptor?<br><br>
                    <!-- 100 kmh -->
                    <input type="radio" name="question7" value="50 kmh" id="dinosaure">
                    <label for="50 kmh"> 50 kmh </label><br>
                    <input type="radio" name="question7" value="100 kmh" id="dinosaure">
                    <label for="100 kmh"> 100 kmh </label><br>
                    <input type="radio" name="question7" value="150 kmh" id="dinosaure">
                    <label for="150 kmh"> 150 kmh </label><br>
                    <input type="radio" name="question7" value="200 kmh" id="dinosaure">
                    <label for="200 kmh"> 200 kmh </label><br>
                </div>
            </div>

            <div class="row">
                <div class="question_general">
                    <u>
                        <h3>QUESTION 8<h3>
                    </u>
                    Quel dinosaure avec une queue finissant par trois grosses boules qui le protégeaient?<br><br>
                    <!-- L'Ankilosaure -->
                    <input type="radio" name="question8" value="Le Tyrannosaure" id="dinosaure">
                    <label for="Le Tyrannosaure"> Le Tyrannosaure </label><br>
                    <input type="radio" name="question8" value="Le Deynosichus" id="dinosaure">
                    <label for="Le Deynosichus"> Le Deynosichus </label><br>
                    <input type="radio" name="question8" value="Le Platéosaure" id="dinosaure">
                    <label for="Le Platéosaure"> Le Platéosaure </label><br>
                    <input type="radio" name="question8" value="L'Ankilosaure" id="dinosaure">
                    <label for="L'Ankilosaure"> L'Ankilosaure </label><br>
                </div>
            </div>

            <div class="row">
                <div class="question_general">
                    <u>
                        <h3>QUESTION 9<h3>
                    </u>
                    Quel était le plus petit de ces dinosaures?<br><br>
                    <!-- Le Compsognatus -->
                    <input type="radio" name="question9" value="Le Vélociraptor" id="dinosaure">
                    <label for="Le Vélociraptor"> Le Vélociraptor </label><br>
                    <input type="radio" name="question9" value="Le Deynosichus" id="dinosaure">
                    <label for="Le Deynosichus"> Le Deynosichus </label><br>
                    <input type="radio" name="question9" value="Le Compsognatus" id="dinosaure">
                    <label for="Le Compsognatus"> Le Compsognatus </label><br>
                    <input type="radio" name="question9" value="Le Platéosaure" id="dinosaure">
                    <label for="Le Platéosaure"> Le Platéosaure </label><br>
                </div>
            </div>

            <div class="row">
                <div class="question_general">
                    <u>
                        <h3>QUESTION 10<h3>
                    </u>
                    Quel est le surnom du Tyrannosaurus-rex?<br><br>
                    <!-- Le T-rex -->
                    <input type="radio" name="question10" value="Le Tyran" id="dinosaure">
                    <label for="Le Tyran"> Le Tyran </label><br>
                    <input type="radio" name="question10" value="Le Tyranno" id="dinosaure">
                    <label for="Le Tyranno"> Le Tyranno </label><br>
                    <input type="radio" name="question10" value="Le Tyty" id="dinosaure">
                    <label for="Le Tyty"> Le Tyty </label><br>
                    <input type="radio" name="question10" value="Le T-rex" id="dinosaure">
                    <label for="Le T-rex"> Le T-rex </label><br>
                </div>
            </div>
            <div class="button_valid">
                <input type="hidden" name="score" value="0">
                <button class="btn btn-outline-primary" type="radio" id="button_quiz"> Voir le résultat </button>
            </div>
        </div>
    </form>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


</body>

</html>