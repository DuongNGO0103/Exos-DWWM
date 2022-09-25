<?php
  $dateNaissance = readline('Entrez votre date de naissance sous ce format jj-MM-annee : ');
  $aujourdhui = date("Y-m-d");
  $diff = date_diff(date_create($dateNaissance), date_create($aujourdhui));
  echo 'Votre age est '.$diff->format('%y');
?>