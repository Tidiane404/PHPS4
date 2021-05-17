<?php
$valeur1=rand(-20,20);
$valeur2=rand(-20,20);

$min=null;
$max=null;
  if($valeur1<$valeur2){
    $min=$valeur1;
    $max=$valeur2;
  }

  if($valeur2<=$valeur1){
    $min=$valeur2;
    $max=$valeur1;
  }


  echo "Odre croissant donne {$min}, {$max} <br>";
  echo "Ordre décroissant donne {$max}, {$min}";  
?>