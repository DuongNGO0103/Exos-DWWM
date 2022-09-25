<?php

//tien hanh tiep nhan data tu back chuyen den
session_start();
//dat ten $tabClient de lay data tu listeEmploye

$tabClient=$_SESSION['listeEmploye'];
?>
<h1>LA LISTE DES EMPLOYEE</h1>
<!-- B1 TAO BANG TABLE VOI TIEU DE -->
<!-- B2 ve lai executeSelectlisteEmploye -->
<table border=1>
<thead>
    <tr>
        <td>noemp</td>
        <td>nom</td>
        <td>prenom</td>
        <td>emploi</td>
        <td>sup</td>
        <td>embauche</td>
        <td>sal</td>
        <td>comm</td>
        <td>noserv</td>
    </tr>
</thead>
<tbody>
    <!--  tien hanh foreach de hien thi gia tri cua cle noemp, nom, prenom.....  -->
    <!-- luu y: de chay thi phai vao execute chay -->
   
<?php
foreach ($tabClient as $result) {
?>  
  <tr>

        <td><?php echo $result['noemp']; ?></td>
        <td><?php echo $result['nom']; ?></td>
        <td><?php echo $result['prenom']; ?></td>
        <td><?php echo $result['emploi'];?></td>
        <td><?php echo $result['sup']; ?></td>
        <td><?php echo $result['embauche'];?></td>
        <td><?php echo $result['sal'];?></td>
        <td><?php echo $result['comm'];?></td>
        <td><?php echo $result['noserv'];?></td>
</tr>
<?php
}

?>

</tbody>
</table>