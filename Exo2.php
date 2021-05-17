<?php

$A=rand(-20,20);
$B=rand(-20,20);
$C=rand(-20,20);
$D=rand(-20,20);

function carre($valeur){
      return $valeur*$valeur;
}
function distance(int $A, int $C, int $B, int $D):float{
    return sqrt(carre($D - $C) + carre($B - $A));

}

echo "La distance entre le point A({A},{$C}) et le point B({$B},{$D})
         est égale à: <br>".distance( $A,  $C,  $B,  $D);
?>