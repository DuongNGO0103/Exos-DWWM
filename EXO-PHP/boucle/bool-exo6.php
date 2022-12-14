<?php

/*

à partir des variables `$roues` `$pedales` et `$moteur`, identifiez le type de véhicule

les types de véhicules possibles sont :

* autre
* mobilette (2 roues, pédales, moteur)
* moto ou  scooter (2 roues, pas de pédales, moteur)
* rosalie (4 roues, pédales, pas de moteur)
* scooter trois roues (3 roues, pas de pédales, moteur)
* tricycle (3 roues, pédales, pas de moteur)
* trottinette ou drésienne (2 roues, pas de pédales, pas de moteur)
* vélo (2 roues, pédales, pas de moteur)
* voiture (4 roues, pas de pédales, moteur)

vous devez utiliser les opérateurs booléens `&&` et `!`
l'opérateur booléen `||` n'est pas nécessaire

*/

require 'lib.php';

list($roues, $pedales, $moteur) = get_random_vehicle();

echo "roues: $roues\n";
echo "pedales: " . boolean_to_string($pedales) . "\n";
echo "moteur: " . boolean_to_string($moteur) . "\n";


if ($roues == 2) {
    if ($pedales && $moteur) {
        echo "mobilette";
    } elseif (!$pedales && $moteur) {
        echo "moto ou scooter";
    } elseif (!$pedales && !$moteur) {
        echo "trotinette ou dresienne";
    } else {
        echo "velo";
    }
}
elseif ($roues == 4) {
    if ($pedales && $moteur) {
        echo "rosalie";
    }
    elseif (!$pedales && $moteur) {
        echo "voiture";
    }
    else {
        echo "autre";
    }
}    
elseif ($roues == 3) {
    if (!$pedales && $moteur) {
        echo "scooter trois roues";
    } else {
        echo "tricycle";
    }
    
}


?>

