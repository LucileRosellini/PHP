<?php
session_start();
include '.src/instruction.php';
if (!isset($_GET['finish'])) {
    $_SESSION['song'] = json_decode(file_get_contents('./.src/.json_model/song' . $_SESSION['step'] . '.json'), true);
    $song             = $_SESSION['song'];
}
?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Titre de la page</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
<?php if (isset($_GET['return']) && $_GET['return'] === 'success') { ?>
    <div class="alert alert-success text-center" role="alert" id="alert">
        OK étape suivante
    </div>
<?php } elseif (isset($_GET['return']) && $_GET['return'] === 'notSuccess') { ?>
    <div class="alert alert-danger text-center" role="alert" id="alert">
        Veuillez recommencer le code n'est pas bon.
    </div>
<?php } ?>

<div class="row container-fluid">
    <div class="col-md-12 jumbotron container text-center">
        <?php if (isset($_GET['finish']) && $_GET['finish']) {
    echo '<h1> Bravo vous avez fini l\'exercice.<br>Ready for the review !!!</h1>';
} else { ?>
        <h2>Bienvenue sur l'entraineur de foreach</h2>
        <p>Le but va être de reproduire l'affichage attendu sur la droite de l'écran à chacune des étapes</p>
        <p>Vous pouvez visualiser le tableau de données en cliquant <a target="_blank" href="display_array.php" class="btn btn-sm btn-light">ici</a></p>
        <p>Il vous suffit d'écrire votre code dans le fichier function.php.</p>
        <p><strong>Etape <?php echo $_SESSION['step'] ?> :</strong><br> <?php echo $_SESSION['instruction'] ?> <br>
            <span class="text-warning">Attention à bien respecter les sauts de ligne.<br>Pensez bien à faire un commit pour chacune des étapes.</span></p>
    </div>
    <div class="col-md-6 jumbotron text-center">
        <h2>Votre Code</h2>
        <div id="code">
            <?php
            include('function.php');
            ?>
        </div>
    </div>
    <div class="col-md-6 bg-success jumbotron text-center">
        <h2>L'affichage attendu</h2>
        <div id="model">
            <?php
            if ($_SESSION['step'] === 5) {
                include('.src/.modelValidation/model3_bis.php');
            } elseif ($_SESSION['step'] === 6) {
                include('.src/.modelValidation/model3_ter.php');
            } else {
                include('.src/.modelValidation/model' . ($_SESSION['step'] > 6 || $_SESSION['step'] === 4 ? '3' : $_SESSION['step']) . '.php');
            }
            ?>
        </div>
    </div>
    <div class="col-md-12 text-center">
        <a href=".src/validate.php" class="btn btn-sm btn-primary" id="btn">Soumettre</a>
    </div>
</div>
    <script src=".src/script.js"></script>
<?php } ?>
</body>
</html>