<?php
echo "entrez la taille d'A: ";
$a=trim(fgets(STDIN));
// création d'un tableau A
$tab1= array();
//saisir les éléments: 
for ($i = 0; $i <$a; $i++) {
$tab1[$i]=readline('saisir votre valeur de la tableau A :'); 
}
$position=0;
$max=0; 
for ($i = 0; $i <$a; $i++) {
if ($tab1[$i]>$max) {
    $max=$tab1[$i];
    $position=$i+1;

}
};
 echo "le plus grand nom est: ".$max. " dans le position: ".$position;   