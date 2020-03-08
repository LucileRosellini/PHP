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
$avec_image = true; 
?>

<?php
function totalPanier($articles) {
	$total = 0;
	foreach ($_POST['articles'] as $nom){
		$total += $articles[$nom]['prix'];
	}
	return($total);
}
?>

<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <link rel="stylesheet" type="text/css" href="img/style.css" />
        <title>Croisière en Louisiane</title>
    </head>
    <body>
        <header class="hero">
            <h1>Votre selection</h1>
        </header>

<?php
foreach ($_POST['articles'] as $nom){
	print('<div class=row>');
	if($avec_image){
		print('<div class="col-lg-2">');
		print('<img src="'.$articles[$nom]['image'].'" class="imgarticle">'.'</div>');
	}
	print('<div class="col-lg-8">');
	print('<h1 class ="nomarticle">'.$articles[$nom]['nom'].'</h1>');
	print('</div>'.'<div class="col-lg-2">');
	print('<h1 class="prixarticle">'.$articles[$nom]['prix'].'€</h1>');
    print('</div>'.'</div>'."\n");
}
print('<h1>Total de votre commande '.totalPanier($articles).'€</h1>'."\n");
?>

</body></html>