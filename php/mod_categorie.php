<?php
include 'inc/inc_fonction_trait_do.php';
$list2=list_cat();
if(mysqli_num_rows($list2) > 0){
  while ($row =mysqli_fetch_assoc($list2)){
    for ($i = 0; $i<sizeof($row['nom']); $i++){
      echo "<option value=\"".$i."\">".$row['nom']."</option>";
    }
  }
}
?>
