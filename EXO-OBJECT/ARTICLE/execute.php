<?php
include('../ARTICLE/article.class.php');
/*$article1 = new Article("ref1","designation1",10);
echo "TVA : " . Article::$TVA;
echo "\n";
print_r($article1);
echo "getTVA article 1: " .$article1->getTVA();
echo "\n";

$article2 = new Article("ref2", "désignation2", 20);

echo "get TVA article 2:" .$article2->getTVA();
echo "\n";*/

echo "Le taux TVA est : ". Article::$tva;
echo "\n";

$article1 = new Article(0,"",0);
echo "\n";
echo "Article 1 :";
echo "\n";
echo "Référence : " .$article1 -> getRef();
echo "\n";
echo "Désignation : " .$article1 -> getDesignation();
echo "\n";
echo "Prix HT : " .$article1 -> getPrixHT();
echo "\n";
echo "Le prix TTC est " .$article1-> calculerPrixTTC();
echo PHP_EOL;
$article2 = new Article(111,"ATA",100);
echo "\n";
echo "Article 2 :";
echo "\n";
echo "Référence : " .$article2 -> getRef();
echo "\n";
echo "Désignation : " .$article2 -> getDesignation();
echo "\n";
echo "Prix HT : " .$article2 -> getPrixHT();
echo "\n";
echo "Le prix TTC est " .$article2->calculerPrixTTC();
echo "\n";
$article3 = new Article(122,"RER",0);
echo "\n";
echo "Article 3 :";
echo "\n";
echo "Référence : " .$article3 -> getRef();
echo "\n";
echo "Désignation : " .$article3 -> getDesignation();
echo "\n";
echo "Prix HT : " .$article3 -> getPrixHT();
echo "\n";
echo "Le prix TTC est " .$article3->calculerPrixTTC();
echo "\n";
$article4 = new Article(111,"ATA",100);
echo "\n";
echo "Article 4 :";
echo "\n";
echo "Référence : " .$article4 -> getRef();
echo "\n";
echo "Désignation : " .$article4 -> getDesignation();
echo "\n";
echo "Prix HT : " .$article4 -> getPrixHT();
echo "\n";
echo "Le prix TTC est " .$article4->calculerPrixTTC()



?>