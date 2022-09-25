<?php
echo "entrez la taille de classe: ";
$a=trim(fgets(STDIN));
// création d'un tableau A
$tab1= array();
//saisir les éléments: 
for ($i = 0; $i <$a; $i++) {
$tab1[$i]=readline('saisir votre valeur de la tableau A :'); 
}
// cacul la moyenne: 
$somme=0;
echo 'la moyenne est: ';
for ($i = 0; $i <$a; $i++) {
    $somme=$somme+$tab1[$i];
};
$moyenne=$somme/$a;
echo $moyenne;
echo PHP_EOL;
echo "les nombres de ces notes supérieures à la moyenne de la classe: ";
        for ($i = 0; $i <$a; $i++) {
                if ($tab1[$i]>$moyenne) {
                echo $tab1[$i].' ';
                    }
                };
        
    


