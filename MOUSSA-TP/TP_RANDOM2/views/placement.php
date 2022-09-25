<?php
session_start();


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>CLASSE</title>
    </head>
<body>



<form class="form" action="../ctrl/traitement2.php" method="post">
        <input type="submit" id="submit" name="submit" value="Cliquez ici pour melanger la Classe DWWM " />
            </form>
      
    <h1>CLASSE DWWM</h1><br>
     
    
    
    
    <div>  
    <div class="tabprofprenom">
        <img class="moussa" src="image/tableclasseprof.png">
        <div class="text">
        <h2>MOUSSA</h2>
        </div>
    </div> 
    <img class="tableauClass" src="image/tableauClasee.png" alt="">   
    </div>    
    
         
    
<div class="tab12"> 
    <div class="tab1">
        <div class="contenant">
            <img src="image/tableclasse1sf.png" alt="image">
            <div class="texte_centrer1"><p id="place1"> PLACE 1 <?php echo $_SESSION['tableau']['Place_1'] ?></p></div>
            <div class="texte_centrer2"><p id="place2"> PLACE 2 <?php echo $_SESSION['tableau']['Place_2'] ?></p></div>
            <div class="texte_centrer3"><p id="place3"> PLACE 3 <?php echo $_SESSION['tableau']['Place_3'] ?></p></div>
            <div class="texte_centrer4"><p id="place4"> PLACE 4 <?php echo $_SESSION['tableau']['Place_4'] ?></p></div>
        </div>
    </div>    

    <div class="tab2">
        <div class="contenant">
            <img src="image/tableclasse1sf.png" alt="image">
            <div class="texte_centrer1"><p id="place5"> PLACE 5 <?php echo $_SESSION['tableau']['Place_5'] ?></p></div>
            <div class="texte_centrer2"><p id="place6"> PLACE 6 <?php echo $_SESSION['tableau']['Place_6'] ?></p></div>
            <div class="texte_centrer3"><p id="place7"> PLACE 7 <?php echo $_SESSION['tableau']['Place_7'] ?></p></div>
            <div class="texte_centrer4"><p id="place8"> PLACE 8 <?php echo $_SESSION['tableau']['Place_8'] ?></p></div>
        </div>
    </div>
</div>    
    

<div class="tab5">
    <img class="tabmiddle" src="image/tablemilieu.png" alt="">
</div>



<div class="tab34">  
    <div class="tab3">
        <div class="contenant">
            <img src="image/tableclasse1sf.png" alt="image">
            <div class="texte_centrer1"><p id="place9"> PLACE 9 <?php echo $_SESSION['tableau']['Place_9'] ?></p></div>
            <div class="texte_centrer2"><p id="place10"> PLACE 10 <?php echo $_SESSION['tableau']['Place_10'] ?></p></div>
            <div class="texte_centrer3"><p id="place11"> PLACE 11 <?php echo $_SESSION['tableau']['Place_11'] ?></p></div>
            <div class="texte_centrer4"><p id="place12"> PLACE 12 <?php echo $_SESSION['tableau']['Place_12'] ?></p></div>
        </div>
    </div>
    
    <div class="tab4">
        <div class="contenant">
            <img src="image/tableclasse1sf.png" alt="image">
            <div class="texte_centrer1"><p id="place13"> PLACE 13 <?php echo $_SESSION['tableau']['Place_13'] ?></p></div>
            <div class="texte_centrer2"><p id="place14"> PLACE 14 <?php echo $_SESSION['tableau']['Place_14'] ?></p></div>
            <div class="texte_centrer3"><p id="place15"> PLACE 15 <?php echo $_SESSION['tableau']['Place_15'] ?></p></div>
            <div class="texte_centrer4"><p id="place16"> PLACE 16 <?php echo $_SESSION['tableau']['Place_16'] ?></p></div>
        </div>
    </div>
</div>
    














<script src="index.js"></script>   
</body>
</html>