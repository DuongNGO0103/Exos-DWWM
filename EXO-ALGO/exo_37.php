<?php
echo "entrez la taille d'A: ";
$a=trim(fgets(STDIN));
// création d'un tableau A
$tab1= array();
//saisir les éléments: 
for ($i = 0; $i <$a; $i++) {
$tab1[$i]=readline('saisir votre valeur de la tableau A :'); 
}
echo 'La tableau A+1: ';
// création d'un tableau B:
$tab2= array();
    for ($i = 0; $i <$a; $i++) {
    $tab2[$i]= $tab1[$i]+1;
    echo $tab2[$i]. ' ';
}