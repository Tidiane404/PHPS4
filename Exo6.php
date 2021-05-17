<?php

$a=rand(-20,20);
$b=rand(-20,20);
$c=rand(-20,20);

echo "La solution de l'équation {$a}x2+{$b}x+{$c}=0 est : <br>";
$delta=$b*$b-(4*$a*$c);
if($delta<0){
    echo "Cette équation n'a pas de solution.";
} elseif ($delta==0){
    $x=-$b/2*$a;
    echo "Cette équation a une racine double égale à : {$x}";
}else{
    $x1=-($b-sqrt($delta))/(2*$a);
    $x2=-($b+sqrt($delta))/(2*$a);
    echo "Cette équation a deux racines égale à : {$x1}, {$x2}";
}
?>