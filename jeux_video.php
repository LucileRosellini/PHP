<?php
//Par exemple: Demander le nom des jeux video. 

/*$bdd = new PDO('mysql:host=localhost;dbname=jeuvideo','root','');
$reponse = $bdd->query('SELECT*FROM jeux_video');
while ($donnees = $reponse->fetch())
{
echo '<p>'. $donnees['nom'].'</p>';
}*/


//Par exemple: Demander le nom des jeux video + la console
$bdd = new PDO('mysql:host=localhost;dbname=jeuvideo','root','');
$reponse = $bdd->query('SELECT*FROM jeux_video');
while ($donnees = $reponse->fetch())
{
echo '<p>'. $donnees['console'] . ' - '. $donnees['nom'] . '</p>';
}


?>

