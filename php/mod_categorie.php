<?php
include 'inc/inc_fonction_trait_do.php';
$list2=list_cat();
echo "<option selected>Choix...</option>";
if(mysqli_num_rows($list2) > 0){
  while ($row =mysqli_fetch_assoc($list2)){
      echo "<option value=\"".$row['id_categorie']."\">".$row['nom']."</option>";
  }
}
?>
