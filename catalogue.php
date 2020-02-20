<?php 
$nom_produit=["Croisière sur le bayou","Decouverte de la faune et la flore de la louisiane","La route du Jazz"];
$prix_produit=["2370€","2590€","2160€"];
$img_produit=["http://localhost/WgrPHP/img/croisiere.jpg","http://localhost/WgrPHP/img/fflore.jpg","http://localhost/WgrPHP/img/jazzman.jpg"];
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
      
<?php for ($i=0; $i<3; $i++)
{ ?>
        <div class="row">
            <div class="col-lg-2">
                <img src="<?php echo $img_produit [$i]?>" class="imgcroisiere">
            </div>
            <div class="col-lg-8">
                <h1 class ="nomcroisiere"><?php echo $nom_produit [$i] ?></h1>
                <p>
                Les Bayous, vastes étendues d'eau nés des méandres sinueux des anciens bras du Mississippi forment un réseau navigable de milliers de kilomètres. La grande région marécageuse du sud de la Louisiane, notamment dans la région de l'Acadiane est un espace amphibie complexe et amphibie où domine l'eau douce, ce qui le différencie de la mangrove. Autrefois occupé par les Cadiens francophones qui vivaient essentiellement des produits de la pêche et de la chasse.
                Mystérieux, attirants et repoussants à la fois, les bayous s'étendent sur tout le sud de la Louisiane et  Formés par les anciens bras du fleuve Mississipi, les bayous sont le refuge d'un grand nombre d'animaux, moustiques, oiseaux,serpents et alligators. C'est à bord d'un bateau à hélice que vous explorerez ces bayous et observerez cette faune sur les conseils avisés d'un guide cajun de souche.
            </p></div>
            <div class="col-lg-2">
                <h1 class="prixcroisiere"><?php echo $prix_produit [$i] ?>
            </h1></div>
          </div>

<?php
}; ?>

<footer>
    <div class="container">
        <div class="col-lg-12">
            <h1>Découvrez aussi...</h1>
            <p>
             Voyagez en thailande <br />
                Partez à la decouverte des merveilles du monde <br />
                Decouvrez la Laponie<br />
              
           </div>
      </div>
      



</footer>
   </body>
</html> 