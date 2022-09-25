<?php


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>insertEmploye</title>
</head>
<body>
    <h1>Insert employe</h1>
    
    <form action="../Ctrl/executeInsertEmploye.php" METHOD="POST">
<fieldset>
<legend>INPUT YOUR INFO</legend>
    <label for="nom">nom</label>
    <input type="text" name="nom"><br><br>

    <label for="prenom">prenom</label>
    <input type="text" name="prenom"><br><br>

    <label for="emploi">emploi</label>
    <input type="text" name="emploi"><br><br>

    <label for="sup">sup</label>
    <input type="text" name="sup"><br><br>
    
    <label for="embauche">embauche</label>
    <input type="text" name="embauche"><br><br>

    <label for="sal">salaire</label>
    <input type="text" name="sal"><br><br>

    <label for="comm">commission</label>
    <input type="text" name="comm"><br><br>

    <label for="noserv">noserv</label>
    <input type="text" name="noserv"><br><br>

    <input type="submit" name="btn_sub" value="submit">
</fieldset>
    </form>
</body>
</html>

