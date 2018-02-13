<?php
include 'link_db.php';
$mail = $_POST['mail'];
$nom = $_POST['nom'];
$reqAddAut = "INSERT INTO auteur (nom,mail) VALUES ('$nom','$mail')";
$boom = mysqli_query($cnx, $reqAddAut);
echo $boom;
 ?>
