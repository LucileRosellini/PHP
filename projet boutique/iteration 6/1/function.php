<?php
//UTILISER LA VARIABLE $song pour afficher les données
//Etape 1

/*foreach ($song as $values) {
    echo $values . "<br>";
  
  }
  


//etape 2
echo $song ['title'] . "<br><br>";

foreach ($song['refrain'] as $couplet) {
  echo $couplet . "<br>";
}
echo "<br>";

echo $song ['author'] ;



//etape 4

echo $song ['title'] . "<br><br>";

foreach ($song['data']['chorus_1'] as $refrain){
  echo $refrain . "<br>";
}
echo "<br>";

foreach ($song['data']['first_verse'] as $premiercouplet){
  echo $premiercouplet . "<br>";
}
echo "<br>";

foreach ($song['data']['chorus_2'] as $refrain2){
  echo $refrain2 . "<br>";
}
echo "<br>";

foreach ($song['data']['second_verse'] as $secondcouplet){
  echo $secondcouplet . "<br>";
}
echo "<br>";
echo $song ['author'] ;

//etape 5 

echo $song ['title'] . "<br>";

foreach ($song['data'] as $key => $refrain){
  echo "<br>";
foreach ($refrain as $ligne){
  echo "$key";
  echo " : "  ;
  echo $ligne. "<br>";
}
}
echo "<br>";
echo $song ['author'] ;*/

//etape 6 

echo $song ['title'] . "<br>";

foreach ($song['data'] as $key => $refrain){// création de la première clé (nom du tableau [chorus])
  echo "<br>";
  foreach ($refrain as $keysd => $ligne){// création de la deuxième clé 
    echo $key . ' ' . ': ' . 'ligne => ' . $keysd . ' '. $ligne . '<br>';
  }
}
echo "<br>";
echo $song ['author'] ;


?>