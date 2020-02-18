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
}*/

//On peut filtrer avec WHERE pour demander uniquement les noms des jeux sur la console "NES" ou "PC" et trier grâce à ORDER BY par ordre de prix.
$bdd = new PDO('mysql:host=localhost;dbname=jeuvideo','root','', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
$reponse = $bdd->query('SELECT console, nom, prix FROM jeux_video WHERE console= "NES" OR console= "PC" ORDER BY prix');
while ($donnees = $reponse->fetch())
{
echo '<p>'. $donnees['console'] . ' - '. $donnees['nom'] . ' - '. $donnees['prix'] . '€</p>';
}




?>

