<?php

echo "entrez A: ";
$a=trim(fgets(STDIN));
// création d'un tableau A
$tab1= array();
//saisir les éléments: 
for ($i = 0; $i <$a; $i++) {
$tab1[$i]=readline('saisir votre valeur de la tableau A :'); 
}
echo 'La tableau A: ';
//affichage des éléments du taleau A
        for ($i = 0; $i <$a; $i++) {
            echo $tab1[$i]. ' ';
            }
// création d'un tableau B
echo PHP_EOL; 
$tab2= array();
//saisir les éléments:
echo PHP_EOL; 
for ($i = 0; $i <$a; $i++) {
$tab2[$i]=readline('saisir votre valeur de la tableau B :'); 
}
echo 'La tableau B: ';
//affichage des éléments du taleau A
        for ($i = 0; $i <$a; $i++) {
            echo $tab2[$i]. ' ';
            }

  // création d'un tableau C
$tab3= array();
//saisir les éléments: 
echo'La tableau C: ';
        for ($i = 0; $i <$a; $i++) {  
        $tab3[$i]=$tab1[$i]+$tab2[$i];
        echo $tab3[$i]. ' ';
    }

