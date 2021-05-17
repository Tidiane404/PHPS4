<?php

$nbre1=rand(-20,20);
$nbre2=rand(-20,20);


if($nbre1==0){
	if ($nbre2==0){
		echo "L'ensemble des solutions de l'équation {$nbre1}x+({$nbre2})=0 est l'ensemble des nombres réels.";
	}else{
		echo "<p>L'ensemble des solutions de l'équation {$nbre1}x+({$nbre2})=0 est l'ensemble vide.";
	}
}else{
	$x=-$nbre2/$nbre1;
	echo "L'équation {$nbre1}x+({$nbre2})=0 possède une et une seule solution : {$x}";
}   
?>