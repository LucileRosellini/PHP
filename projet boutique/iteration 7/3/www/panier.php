<?php
session_start();
$avec_image = false; 
include('inventaire.php');
# print('<!-- POST : '.var_dump($_POST).' -->'."\n");
# print('<!-- SESSION : '.var_dump($_SESSION).' -->'."\n");
if(!isset($_POST['recalcule'])){
	print('<!-- Starting session -->'."\n");
	foreach ($_POST['articles'] as $article) {
		$_SESSION['panier'][$article] = 1;
	}
} 
if ($_POST['recalcule']){
	print('<!-- Recalcule -->'."\n");
	foreach ($_POST as $article => $quantite) {
		if($article != 'recalcule') {
			if(!is_numeric($quantite)){
				print('La quantité de '.$article.' doit etre numeriques'."\n");
			} elseif($quantite < 0){
				print('La quantité de '.$article.' doit etre positives'."\n");
			} else {
				$_SESSION['panier'][$article] = $quantite;
			}
		} 
	}
} elseif ($_POST['supprime'])
} else {
	print('<!-- Starting session -->'."\n");
	foreach ($_POST['articles'] as $article) {
		$_SESSION['panier'][$article] = 1;
	}
}
?>

<?php
function totalPanier($panier) {
	include('inventaire.php');
	$total = 0;
	foreach ($panier as $article => $quantite){
		$total += $articles[$article]['prix'] * $quantite;
	}
	return($total);
}

function supprimeArticle($article) {
	unset($_SESSION[$article]);
}

?>

<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <link rel="stylesheet" type="text/css" href="img/style.css" />
        <title>Votre panier</title>
    </head>
    <body>
        <header class="hero">
            <h1>Votre selection</h1>
        </header>
		<form method="POST" action="/panier.php">
<?php
foreach ($_SESSION['panier'] as $article => $quantite){
	print('<div class=row>');
	if($avec_image){
		print('<div class="col-lg-2"><img src="'.$articles[$article]['image'].'" class="imgarticle">'.'</div>');
	}
	print('<div class="col-lg-8"><h1 class ="nomarticle">'.$article.'</h1></div>');
	print('<div class="col-lg-2"><h1 class="prixarticle">'.$articles[$article]['prix'].'€</h1></div>');
	print('<div class="col-lg-2"><input type="text" name="'.$article.'" value="'.$quantite.'"></div>');
	print('<div class="col-lg-2"><input type="submit" name="'.$article.'" value="supprime"></div>');
	print('</div>'."\n");
}
print('<input type="submit" name="recalcule" value="recalcule"></form>'."\n");
print('<h1>Total de votre commande '.totalPanier($_SESSION['panier']).'€</h1>'."\n");
?>

</body></html>