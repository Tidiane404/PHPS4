<?php

$valeur1=rand(-20,20);
$valeur2=rand(-20,20);
$valeur3=rand(-20,20);


if($valeur1>$valeur2){
    $min=$valeur2;
    $max=$valeur1;
}else{
  $min=$valeur1;
  $max=$valeur2;
}
if($valeur3<$min){
    $moy=$min;
    $min=$valeur3;
}else{
    if($valeur3<$max){
      $moy=$valeur3;
    }else{
      $moy=$max;
      $max=$valeur3;
    }

}

echo "L'ordre croissant donne {$min},{$moy},{$max} <br>";
echo "L'ordre décroissant donne {$max},{$moy},{$min}";  
?>