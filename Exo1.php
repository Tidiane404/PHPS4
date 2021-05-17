<?php
$nbre1=rand(-20,20);
$nbre2=rand(-20,20);

echo "Avant permutation: <br>";
echo "1er nombre = {$nbre1} <br>";
echo "2éme nombre = {$nbre2} <br>";

$stock=$nbre1;
$nbre1=$nbre2;
$nbre2=$stock;
echo "Aprés permutation: <br>";
echo "1er nombre = {$nbre1} <br>";
echo "2éme nombre = {$nbre2} <br>";
   
?>