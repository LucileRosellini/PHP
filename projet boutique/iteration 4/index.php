<?php
$nom_produit=["Croisière sur le bayou","Decouverte de la faune et la flore de la louisiane","La route du Jazz"];
$prix_produit=["2370€","2590€","2160€"];
$img_produit=["img/croisiere.jpg","img/fflore.jpg","img/jazzman.jpg"];
include('functions.php');
?>

<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <link rel="stylesheet" type="text/css" href="style.css" />
        <title>Croisière en Louisiane</title>
    </head>
    <body>
        <header class="hero">
            <h1>Partez avec-nous pour une destination de rêve!</h1>
            <h2>Aventurier? Partez en croisière, découvrez les mystères des bayous... et frémissez! </h2>
        </header>

<?php for ($i=0; $i<count($nom_produit); $i++)
{
    afficheArticle($nom_produit[$i], $prix_produit[$i], $img_produit[$i]);
}; ?>
        <footer>
            <div class="container">
                <div class="col-lg-12">
                    <h1>Découvrez aussi...</h1>
                    <p>
                        Voyagez en thailande <br />
                        Partez à la decouverte des merveilles du monde <br />
                        Decouvrez la Laponie<br />
                    </p>
                </div>
            </div>
        </footer>
    </body>
</html> 