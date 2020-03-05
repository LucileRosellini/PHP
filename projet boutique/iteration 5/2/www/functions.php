<?php

function verifForm ($nom_article, $prix_article, $img_article) {
    // Il est possible de tester que les champs de saisis sont bien remplis. 
    // Isset est un boolean. Si le champ est vide (Null) il renverra "false".
    $pas_bon = 0; 
    if(! $nom_article) {
        print(
            '       <div class="erreur">Pas de nom d\'article</div>' . "\n"
        );
        $pas_bon = 1;
    } 
    if(! $prix_article) {
        print(
            '       <div class="erreur">Pas de prix d\'article</div>' . "\n"
        );
        $pas_bon = 1;
    } 
    if($img_article == 'upload/') {
        print(
            '       <div class="erreur">Pas d\'image d\'article</div>' . "\n"
        );
        $pas_bon = 1;
    } 
    if($pas_bon == 0) {
        header('Location: /displayArticle.php?nom='.$nom_article.'&prix='.$prix_article.'&image='.$img_article);
    }
}

function displayArticle ($nom_article, $prix_article, $img_article) {
    print(
        '   <div class="row">' . "\n" .
        '       <div class="col-lg-2">' . "\n" .
        '           <img src="' . $img_article . '" class="imgarticle">' . "\n" .
        '       </div>' . "\n" .
        '       <div class="col-lg-8">' . "\n" .
        '           <h1 class ="nomarticle">' . $nom_article . '</h1>' . "\n" .
        '       </div>' . "\n" .
        '       <div class="col-lg-2">' . "\n" .
        '           <h1 class="prixarticle">' . $prix_article . '</h1>' . "\n" .
        '       </div>' . "\n" .
        '   </div>' . "\n"
    );
}

?>