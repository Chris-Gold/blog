<?php
include 'link_db.php';

$modAuteur = "SELECT nom FROM auteur";

$resModAuteur = mysqli_query($cnx, $modAuteur);
echo "<option selected>Choix...</option>";
if(mysqli_num_rows($resModAuteur) > 0){
  while ($row =mysqli_fetch_assoc($resModAuteur)){
      echo "<option value=\"".$row['nom']."\">".$row['nom']."</option>";
  }
}/*
include 'inc/inc_fonction_trait_do.php';
$list=list_auteur();
if(mysqli_num_rows($list) > 0){
  while ($row1 =mysqli_fetch_assoc($list)){
    for ($ii = 0; $ii<sizeof($row1['nom']); $ii++){
      echo "<option value=\"".$ii."\">".$row1['nom']."</option>";
    }
  }
}*/
?>
