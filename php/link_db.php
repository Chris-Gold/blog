<?php
$serveur = "localhost";
$usr= "csa";
$password = "aformac87";
$dbName= "blog_af";

$cnx = mysqli_connect($serveur, $usr, $password, $db_name);
if(!$cnx){
  echo "ca va pas!!";
}
else{
  echo "ouai, c'est cool!!";
}
?>
