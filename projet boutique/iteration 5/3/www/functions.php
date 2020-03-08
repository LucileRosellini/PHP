<?php

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