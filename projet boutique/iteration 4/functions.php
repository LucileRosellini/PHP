<?php

function afficheArticle ($nom_produit, $prix_produit, $img_produit) {
    print(
        '   <div class="row">' . "\n" .
        '       <div class="col-lg-2">' . "\n" .
        '           <img src="' . $img_produit . '" class="imgcroisiere">' . "\n" .
        '       </div>' . "\n" .
        '       <div class="col-lg-8">' . "\n" .
        '           <h1 class ="nomcroisiere">' . $nom_produit . '</h1>' . "\n" .
        '           <p>' . "\n" .
        '               Les Bayous, vastes étendues d\'eau nés des méandres sinueux des anciens bras du Mississippi forment un réseau navigable de milliers de kilomètres. La grande région marécageuse du sud de la Louisiane, notamment dans la région de l\'Acadiane est un espace amphibie complexe et amphibie où domine l\'eau douce, ce qui le différencie de la mangrove. Autrefois occupé par les Cadiens francophones qui vivaient essentiellement des produits de la pêche et de la chasse.' . "\n" .
        '               Mystérieux, attirants et repoussants à la fois, les bayous s\'étendent sur tout le sud de la Louisiane et Formés par les anciens bras du fleuve Mississipi, les bayous sont le refuge d\'un grand nombre d\'animaux, moustiques, oiseaux,serpents et alligators. C\'est à bord d\'un bateau à hélice que vous explorerez ces bayous et observerez cette faune sur les conseils avisés d\'un guide cajun de souche.' . "\n" .
        '           </p>' . "\n" .
        '       </div>' . "\n" .
        '       <div class="col-lg-2">' . "\n" .
        '           <h1 class="prixcroisiere">' . $prix_produit . '</h1>' . "\n" .
        '       </div>' . "\n" .
        '   </div>' . "\n"
    );
}

function afficheArticle1 ()
{
    $nom_produit= 'Croisière sur le bayou';
    $prix_produit= 2370;
    $img_produit = 'img/croisiere.jpg';
    afficheArticle($nom_produit, $prix_produit, $img_produit);
}

function afficheArticle2 ()
{
    $nom_produit= 'Decouverte de la faune et la flore de la louisiane';
    $prix_produit= 2590;
    $img_produit= 'img/fflore.jpg';
    afficheArticle($nom_produit, $prix_produit, $img_produit);
}

function afficheArticle3 ()
{
    $nom_produit= 'La route du Jazz';
    $prix_produit= 2160;
    $img_produit= 'img/jazzman.jpg'; 
    afficheArticle($nom_produit, $prix_produit, $img_produit);
}

?>