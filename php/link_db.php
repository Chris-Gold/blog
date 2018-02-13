<?php
$serveur = "localhost";
$usr= "csa";
$password = "aform87";
$dbName= "blog_af";

$cnx = mysqli_connect($serveur, $usr, $password, $dbName);

$cnxo =  new mysqli($serveur, $usr, $password, $dbName);
mysqli_set_charset($cnx, "utf8");
?>
