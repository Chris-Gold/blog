<?php
include 'inc/inc_fonction_trait_do.php';
$resFull=select_article();

if(mysqli_num_rows($resFull) > 0){
  while ($row = mysqli_fetch_assoc($resFull)){
        echo "<div class=\"container-fluid\">";
        echo "<li class=\"list-group-item disabled\">Article n°".$row['id_article']." : ".$row['titre']."</li>";
        echo "<li class=\"list-group-item ft9\">Categorie: ".$row['categorie']."</li>";
        echo "<li class=\"list-group-item ft9\">".$row['auteur']." a créé(e) cet article le ".$row['date_crea']."</li>";
        echo "<li class=\"list-group-item \">".$row['texte']."</li>";
        echo "</div>";

  };
}

?>
