<?php
session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./style.css">
    
</head>
<body>
    <div class="background">
    <!-- le cle Place_1, afficher la valeur de tabPlacement  -->
        <div class="div1">PLACE_1<?php echo $_SESSION['tabPlacement']['Place_1']?></div>
        <div class="div2">PLACE_2<?php echo $_SESSION['tabPlacement']['Place_2']?></div>
        <div class="div3">PLACE_3<?php echo $_SESSION['tabPlacement']['Place_3']?></div>
        <div class="div4">PLACE_4<?php echo $_SESSION['tabPlacement']['Place_4']?></div>
        <div class="div5">PLACE_5<?php echo $_SESSION['tabPlacement']['Place_5']?></div>
        <div class="div6">PLACE_6<?php echo $_SESSION['tabPlacement']['Place_6']?></div>
        <div class="div7">PLACE_7<?php echo $_SESSION['tabPlacement']['Place_7']?></div>
        <div class="div8">PLACE_8<?php echo $_SESSION['tabPlacement']['Place_8']?></div>
        <div class="div9">PLACE_9<?php echo $_SESSION['tabPlacement']['Place_9']?></div>
        <div class="div10">PLACE_10<?php echo $_SESSION['tabPlacement']['Place_10']?></div>
        <div class="div11">PLACE_11<?php echo $_SESSION['tabPlacement']['Place_11']?></div>
        <div class="div12">PLACE_12<?php echo $_SESSION['tabPlacement']['Place_12']?></div>
        <div class="div13">PLACE_13<?php echo $_SESSION['tabPlacement']['Place_13']?></div>
        <div class="div14">PLACE_14<?php echo $_SESSION['tabPlacement']['Place_14']?></div>
        <div class="div15">PLACE_15<?php echo $_SESSION['tabPlacement']['Place_15']?></div>
        <div class="div16">PLACE_16<?php echo $_SESSION['tabPlacement']['Place_16']?></div>
        <form class="form" action="../ctrl/traitement1.php" method="post">
            <input type="submit" id="submit" name="submit" value="melanger" />
        </form>
    </div>
    
</body>
</html>