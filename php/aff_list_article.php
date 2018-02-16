<?php
include 'inc/inc_fonction_trait_do.php';
//include 'inc/inc_fonction_mysql.php';
$result = list_article();
//$tab = sql_a_tableau($result);

echo "<div class=\"row\">";
if(mysqli_num_rows($result) > 0){

  while ($row = mysqli_fetch_assoc($result)){
    echo "<div class=\"col-sm-6 col-lg-12 \">";
        echo "<div>";
        echo "<div class=\"\"><li id=\"".$row['id_article']."\" class=\"title_art list-group-item disabled \" onclick=\"ajax_aff_complet(this.id)\">".$row['titre']."</li></div>";
        echo "<li class=\"list-group-item ft9\">Categorie: ".$row['categorie']."</li>";
        echo "<li class=\"list-group-item ft9\">Créé par ".$row['auteur']." le ".$row['date_crea']."</li>";
        //echo "<li class=\"list-group-item mb-4 \">".substr($row['texte'],0,65).$bugfix."</li>";
        echo "<div  id=\"div".$row['id_article']."\" class=\"\" onclick=\"toggle(this.id)\"><i class=\"fa fa-plus\"></i></div>";
        echo "<div id=\"iddiv".$row['id_article']."\" class=\"container-fluid box-preview\"><li class=\"list-group-item mb-4 \">".$row['texte']."</div></li>";
        echo "</div>";
    echo "</div>";

  };
      //echo "</div>";

}
//echo "</div>";




?>
