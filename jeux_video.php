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
}*/


//Gestion des erreurs lié à Fetch. erreur ici matérialisé dans jeux_video à qui on a supprimé le "é" ou bien mal ecrit "FROM"...
$bdd = new PDO('mysql:host=localhost;dbname=jeuvideo','root','', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
$reponse = $bdd->query('SELECT*FROM jeux_vido');
while ($donnees = $reponse->fetch())
{
echo '<p>'. $donnees['console'] . ' - '. $donnees['nom'] . '</p>';
}



?>

