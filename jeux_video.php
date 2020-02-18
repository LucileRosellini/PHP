<?php
//Par exemple: Demander le nom des jeux video. 

/*$bdd = new PDO('mysql:host=localhost;dbname=jeuvideo','root','');
$reponse = $bdd->query('SELECT*FROM jeux_video');
while ($donnees = $reponse->fetch())
{
echo '<p>'. $donnees['nom'].'</p>';
}


//Par exemple: Demander le nom des jeux video + la console
$bdd = new PDO('mysql:host=localhost;dbname=jeuvideo','root','');
$reponse = $bdd->query('SELECT*FROM jeux_video');
while ($donnees = $reponse->fetch())
{
echo '<p>'. $donnees['console'] . ' - '. $donnees['nom'] . '</p>';
}


//Gestion des erreurs lié à Fetch. erreur ici matérialisé dans jeux_video à qui on a supprimé le "é" ou bien mal ecrit "FROM"...
$bdd = new PDO('mysql:host=localhost;dbname=jeuvideo','root','', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
$reponse = $bdd->query('SELECT*FROM jeux_vido');
while ($donnees = $reponse->fetch())
{
echo '<p>'. $donnees['console'] . ' - '. $donnees['nom'] . '</p>';
}

//Demander SEULEMENT le nom des jeux video + la console
$bdd = new PDO('mysql:host=localhost;dbname=jeuvideo','root','', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
$reponse = $bdd->query('SELECT console, nom FROM jeux_video');
while ($donnees = $reponse->fetch())
{
echo '<p>'. $donnees['console'] . ' - '. $donnees['nom'] . '</p>';
}

//On peut filtrer avec WHERE pour demander uniquement les noms des jeux sur la console "NES"
$bdd = new PDO('mysql:host=localhost;dbname=jeuvideo','root','', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
$reponse = $bdd->query('SELECT console, nom FROM jeux_video WHERE console= "NES"');
while ($donnees = $reponse->fetch())
{
echo '<p>'. $donnees['console'] . ' - '. $donnees['nom'] . '</p>';
}

//On peut filtrer avec WHERE pour demander uniquement les noms des jeux sur la console "NES" ou "PC" /!/ On remarquera qu'il est possible d'utiliser le "OR" de PHP pour un même resultat. 
$bdd = new PDO('mysql:host=localhost;dbname=jeuvideo','root','', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
$reponse = $bdd->query('SELECT console, nom FROM jeux_video WHERE console= "NES" OR console= "PC"');
while ($donnees = $reponse->fetch())
{
echo '<p>'. $donnees['console'] . ' - '. $donnees['nom'] . '</p>';
}

//On peut filtrer avec WHERE pour demander uniquement les noms des jeux sur la console "NES" ou "PC" et trier grâce à ORDER BY par ordre alphabetique.
$bdd = new PDO('mysql:host=localhost;dbname=jeuvideo','root','', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
$reponse = $bdd->query('SELECT console, nom FROM jeux_video WHERE console= "NES" OR console= "PC" ORDER BY nom');
while ($donnees = $reponse->fetch())
{
echo '<p>'. $donnees['console'] . ' - '. $donnees['nom'] . '</p>';
}

//On peut filtrer avec WHERE pour demander uniquement les noms des jeux sur la console "NES" ou "PC" et trier grâce à ORDER BY par ordre de prix /!/ même si le tableau "prix" n'est pas appellé!.
$bdd = new PDO('mysql:host=localhost;dbname=jeuvideo','root','', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
$reponse = $bdd->query('SELECT console, nom FROM jeux_video WHERE console= "NES" OR console= "PC" ORDER BY prix');
while ($donnees = $reponse->fetch())
{
echo '<p>'. $donnees['console'] . ' - '. $donnees['nom'] . '</p>';
}

//On peut filtrer avec WHERE pour demander uniquement les noms des jeux sur la console "NES" ou "PC" et trier grâce à ORDER BY par ordre de prix.
$bdd = new PDO('mysql:host=localhost;dbname=jeuvideo','root','', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
$reponse = $bdd->query('SELECT console, nom, prix FROM jeux_video WHERE console= "NES" OR console= "PC" ORDER BY prix ');
while ($donnees = $reponse->fetch())
{
echo '<p>'. $donnees['console'] . ' - '. $donnees['nom'] . ' - '. $donnees['prix'] . '€</p>';
}

//On peut filtrer avec WHERE pour demander uniquement les noms des jeux sur la console "NES" ou "PC" et trier grâce à ORDER BY par ordre de prix decroissant.
$bdd = new PDO('mysql:host=localhost;dbname=jeuvideo','root','', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
$reponse = $bdd->query('SELECT console, nom, prix FROM jeux_video WHERE console= "NES" OR console= "PC" ORDER BY prix DESC');
while ($donnees = $reponse->fetch())
{
echo '<p>'. $donnees['console'] . ' - '. $donnees['nom'] . ' - '. $donnees['prix'] . '€</p>';
}

//On peut filtrer avec WHERE pour demander uniquement les noms des jeux sur la console "NES" ou "PC" et trier grâce à ORDER BY par ordre de prix decroissant. Il peut etre utile de limiter le nombre de resultat reçu si la base de donnée est enorme... 
$bdd = new PDO('mysql:host=localhost;dbname=jeuvideo','root','', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
$reponse = $bdd->query('SELECT console, nom, prix FROM jeux_video WHERE console= "NES" OR console= "PC" ORDER BY prix DESC LIMIT 5');
while ($donnees = $reponse->fetch())
{
echo '<p>'. $donnees['console'] . ' - '. $donnees['nom'] . ' - '. $donnees['prix'] . '€</p>';
}

//On peut egalement créer des variables afin de permettre à l'utilisateur de programmer des préférences par exemple.
//On peut demandé par exemple à l'utilisateur de choisir la console dont il veut les données. Requête dit "préparée". ici l'utilisateur demande NES
$bdd = new PDO('mysql:host=localhost;dbname=jeuvideo','root','', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
$requete = $bdd->prepare('SELECT * FROM jeux_video WHERE console = ?');
$requete ->execute (array('NES'));
while ($donnees = $requete->fetch())
{
echo '<p>'. $donnees['console'] . ' - '. $donnees['nom'] . ' - '. $donnees['prix'] . '€</p>';
}

//On peut egalement créer des variables afin de permettre à l'utilisateur de programmer des préférences par exemple.
//On peut demandé par exemple à l'utilisateur de choisir la console dont il veut les données. On peut recupéré des champs envoyé en GET
// Pour l'exemple dans le navigateur on simule le GET http://localhost/PHP/jeux_video.php?console=PC (on ajoute ?console=PC par rapport aux exercices précédents.)
$bdd = new PDO('mysql:host=localhost;dbname=jeuvideo','root','', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
$requete = $bdd->prepare('SELECT * FROM jeux_video WHERE console = ?');
$requete ->execute (array($_GET['console']));
while ($donnees = $requete->fetch())
{
echo '<p>'. $donnees['console'] . ' - '. $donnees['nom'] . ' - '. $donnees['prix'] . '€</p>';
}*/


//On peut demandé par exemple à l'utilisateur de choisir la console dont il veut les données. On peut recupéré des champs envoyé en GET
// Pour l'exemple dans le navigateur on simule le GET http://localhost/PHP/jeux_video.php?console=PC (on ajoute ?console=PC par rapport aux exercices précédents.)
// Afin d'eviter que l'utilisateur ne rentre n'importe quoi comme paramètre consol ce qui pourrait planter le process il peut -être judicieux de faire un ISSET "test"

if (isset($_GET ['console']))
{
    $bdd = new PDO('mysql:host=localhost;dbname=jeuvideo','root','', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    $requete = $bdd->prepare('SELECT * FROM jeux_video WHERE console = ?');
    $requete ->execute (array($_GET['console']));
    while ($donnees = $requete->fetch())
    {
    echo '<p>'. $donnees['console'] . ' - '. $donnees['nom'] . ' - '. $donnees['prix'] . '€</p>';
    }
}


?>


