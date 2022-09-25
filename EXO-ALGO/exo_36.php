<?php
echo "entrez la taille d'A: ";
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
echo "entrez la taille d'B: ";
$b=trim(fgets(STDIN));
$tab2= array();
//saisir les éléments:
echo PHP_EOL; 
for ($j = 0; $j <$b; $j++) {
$tab2[$j]=readline('saisir votre valeur de la tableau B :'); 
}
echo 'La tableau B: ';
//affichage des éléments du taleau B
        for ($j = 0; $j <$b; $j++) {
            echo $tab2[$j]. ' ';
            };

//cacul $schtroumpf 
$schtroumpf = 0;
echo 'Le Schotroumpf sera: ';
for ($i = 0; $i <$a; $i++) {
    for ($j = 0; $j <$b; $j++) {
        $schtroumpf = $schtroumpf + ($tab1[$i]*$tab2[$j]);
    };
}
echo $schtroumpf;
