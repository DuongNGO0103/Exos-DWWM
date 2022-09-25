<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>

:root{
    --policeP: ;
    --sizeP: ;
    --colourP: white; 
}
body p {
    color: var(--colourP); 
}
.divTextePlace{
    width: 100px;
    
}
.carre1{
    width: 500px;
    height: 500px;
    display: grid;
grid-template-columns: repeat(5, 1fr);
grid-template-rows: repeat(5, 1fr);
grid-column-gap: 0px;
grid-row-gap: 0px;
}

.carre2{
    width: 500px;
    height: 500px;
    display: grid;
grid-template-columns: repeat(5, 1fr);
grid-template-rows: repeat(5, 1fr);
grid-column-gap: 0px;
grid-row-gap: 0px;
}

.carre3{
    width: 500px;
    height: 500px;
    display: grid;
grid-template-columns: repeat(5, 1fr);
grid-template-rows: repeat(5, 1fr);
grid-column-gap: 0px;
grid-row-gap: 0px;
}

.carre4{
    width: 500px;
    height: 500px;
    display: grid;
grid-template-columns: repeat(5, 1fr);
grid-template-rows: repeat(5, 1fr);
grid-column-gap: 0px;
grid-row-gap: 0px;
}
.divTextePlace1{grid-area: 1 / 3 / 2 / 4; margin: none;}
.divTextePlace2{grid-area: 3 / 1 / 4 / 2;  }
.imaCarre1{  grid-area: 2 / 2 / 5 / 5;}
.divTextePlace3{grid-area: 3 / 5 / 4 / 6; }
.divTextePlace4{grid-area: 5 / 3 / 6 / 4;}

#conteneur1{
    display: flex;
    justify-content: space-around;
 }

 #conteneur2{
    display: flex;
    justify-content: space-around;
 }

 #lamaf{
    width: 500px;
    height: 200px; 
    margin: auto;
 }

 body{
    background-color:#40180F ;
 }

 .btn {
    color:#0D0D0D ;
    border-color: #D99B84;
    width: 10%;
    height: 40px;
    border-radius: 5px;
    position: absolute;
    margin: auto;
    float: left;
  }
  
  .btn:hover {
    background-color:#8C4C35 ;
    color: white;
  }
    </style>
</head>
<body>

    <section id="lamaf"><div><img src="./lamaf.png" alt=""></div></section>
    <section id="conteneur1">
        <div class="carre1">
            <div class="divTextePlace1">
                <p id="place1">
                 Place_1   <?php echo $_SESSION['tableauAssociatif']['Place_1']; ?>
                </p>
            </div>
            <div class="divTextePlace2">
                <p id="place1">Place_2  <?php echo $_SESSION['tableauAssociatif']['Place_2']; ?></p>
            </div>
            <img class="imaCarre1" src="./imgCarrePlace.jpg" alt="" width="300px" height="300px">
            <div class="divTextePlace3">
                <p id="place1"> Place_3 <?php echo $_SESSION['tableauAssociatif']['Place_3']; ?> </p>
            </div>
            <div class="divTextePlace4">
                <p id="place1">Place_4 <?php echo $_SESSION['tableauAssociatif']['Place_4']; ?></p>
            </div>
        </div>

        <div class="carre2">
            <div class="divTextePlace1">
                <p id="place1">Place_5 <?php echo $_SESSION['tableauAssociatif']['Place_5']; ?></p>
            </div>
            <div class="divTextePlace2">
                <p id="place1">Place_6 <?php echo $_SESSION['tableauAssociatif']['Place_6']; ?></p>
            </div>
            <img class="imaCarre1" src="./imgCarrePlace.jpg" alt="" width="300px" height="300px">
            <div class="divTextePlace3">
                <p id="place1">Place_7 <?php echo $_SESSION['tableauAssociatif']['Place_7']; ?></p>
            </div>
            <div class="divTextePlace4">
                <p id="place1">Place_8 <?php echo $_SESSION['tableauAssociatif']['Place_8']; ?></p>
            </div>
        </div>
    </section>
    
    <form action="../ctrl/traitement.php"  method="post">
        <input type="submit" id="submit" name="submit" value="Envoyer">
    </form>


    <section id="conteneur2">
        <div class="carre3">
            <div class="divTextePlace1">
                <p id="place1">Place_9 <?php echo $_SESSION['tableauAssociatif']['Place_9']; ?></p>
            </div>
            <div class="divTextePlace2">
                <p id="place1">Place_10 <?php echo $_SESSION['tableauAssociatif']['Place_10']; ?></p>
            </div>
            <img class="imaCarre1" src="./imgCarrePlace.jpg" alt="" width="300px" height="300px">
            <div class="divTextePlace3">
                <p id="place1">Place_11 <?php echo $_SESSION['tableauAssociatif']['Place_11']; ?></p>
            </div>
            <div class="divTextePlace4">
                <p id="place1">Place_12 <?php echo $_SESSION['tableauAssociatif']['Place_12']; ?></p>
            </div>
        </div>

        <div class="carre4">
            <div class="divTextePlace1">
                <p id="place1">Place_13 <?php echo $_SESSION['tableauAssociatif']['Place_13']; ?></p>
            </div>
            <div class="divTextePlace2">
                <p id="place1">Place_14 <?php echo $_SESSION['tableauAssociatif']['Place_14']; ?></p>
            </div>
            <img class="imaCarre1" src="./imgCarrePlace.jpg" alt="" width="300px" height="300px">
            <div class="divTextePlace3">
                <p id="place1">Place_15 <?php echo $_SESSION['tableauAssociatif']['Place_15']; ?></p>
            </div>
            <div class="divTextePlace4">
                <p id="place1">Place_16 <?php echo $_SESSION['tableauAssociatif']['Place_16']; ?></p>
            </div>
        </div>
    </section>
</body>
</html>