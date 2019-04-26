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

    <!-- HOMEPAGE SQUEEZE -->
    <div class="container">
        <div class="marge">
            <h1>Bienvenue sur notre Quiz !</h1>
            <p>Une fois votre pseudo rempli, répondez aux différentes questions proposées.</p><br>
            <p class="second_p">Questionnaire sur les dinosaures.</p>
            <div class="form_container my-5" id="form_quiz">
                <div class="form-row">
                    <form action="user.php" method="post">
                        <div class="col-4 offset-4">
                            <div class="input-group mb-4">
                                <input type="text" class="form-control" placeholder="Pseudo..." name="pseudo" required>
                                <div class="input-group-mb-8">
                                    <button class="btn btn-outline-primary" type="submit" id="button_quiz"> Commencer </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <br />
                <h2>Bonne chance &#9786;</h2>
            </div>
        </div>
        <!-- FIN HOMEPAGE SQUEEZE -->

        <!-- FOOTER -->
        <?php
        include "footer.php";
        ?>
        <!-- FOOTER -->
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


</body>

</html>