<?php
$serveur = "localhost";
$usr= "csa";
$password = "aform87";
$dbName= "blog_af";

$cnx = mysqli_connect($serveur, $usr, $password, $dbName);

/*Teste de la connexion a la BDD
if(!$cnx){
  echo "ca va pas!!";
}
else{
  echo "ouai, c'est cool!!";
}*/
?>
