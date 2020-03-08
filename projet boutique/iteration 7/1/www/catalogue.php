<?php

$articles = [
	'bayou' => [ 
		'nom'   => 'Croisière sur le bayou',
		'prix'  => 2370,
		'image' => 'img/croisiere.jpg'
	],
	'flore' => [
		'nom'   => 'Decouverte de la faune et la flore de la louisiane',
		'prix'  => 2590,
		'image' => 'img/fflore.jpg'
	],
	'jazz'  => [
		'nom'   => 'La route du Jazz',
		'prix'  => 2160,
		'image' => 'img/jazzman.jpg'
	]
];
?> 

<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <link rel="stylesheet" type="text/css" href="img/style.css" />
        <title>Croisière en Louisiane</title>
    </head>
    <body>
        <header class="hero">
            <h1>Partez avec-nous pour une destination de rêve!</h1>
            <h2>Aventurier? Partez en croisière, découvrez les mystères des bayous... et frémissez! </h2>
        </header>

        <footer>

<form method='POST' action='panier.php'>
Selectionnez vos produits:<br> 

<?php
foreach ($articles as $nom => $article){
	print('<div class=row>'.'<div class="col-lg-2">');
	print("<input type='checkbox' name='articles[]' value='".$nom."'>");
	print('</div>'.'<div class="col-lg-2">');
	print('<img src="'.$article['image'].'" class="imgarticle">');
	print('</div>'.'<div class="col-lg-8">');
	print('<h1 class ="nomarticle">'.$article['nom'].'</h1>');
	print('</div>'.'<div class="col-lg-2">');
	print('<h1 class="prixarticle">'.$article['prix'].'€</h1>');
    print('</div>'.'</div>'."\n");
}?>
<input type="submit" name="choixpdt" value="Choisis">
</form>


        </footer>
    </body>
</html> 