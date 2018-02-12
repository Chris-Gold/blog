<?php
include 'link_db.php';

//Affichage des articles par date de modification
$reqAffDown = "SELECT *, SUBSTR(texte 10) FROM article ORDER BY date_modif DESC LIMIT 5";
$reqAffUp = "SELECT *, SUBSTR(texte, 1, 10) FROM article ORDER BY date_modif ASC LIMIT 5";

//Affichage les articles de l'auteur...
$reqFiltNom = "SELECT * FROM article WHERE article.auteur= ";
//Affichage grouper par auteurs
$reqFiltNomUp = "SELECT * FROM article GROUP BY auteur ASC";
$reqFiltNomDown = "SELECT * FROM article GROUP BY auteur DESC";

//Affichage des articles de la categorie...
$reqFiltCat = "SELECT * FROM article WHERE article.categorie= ";
//Affichage grouper par categorie
$reqFiltCatUp = "SELECT * FROM article GROUP BY categorie ASC";
$reqFiltCatDown = "SELECT * FROM article GROUP BY categorie DESC";




$result = mysqli_query($cnx, $reqAffUp);

if(mysqli_num_rows($result) > 0){
  while ($row = mysqli_fetch_assoc($result)){
    echo "<li class=\"list-group-item disabled\">".$row['titre']."</li>";
    echo "<li class=\"list-group-item\">Categorie: ".$row['categorie']."</li>";
    echo "<li class=\"list-group-item \">".$row['auteur']." a creer cet article le ".$row['date_crea']."</li>";
    echo "<li class=\"list-group-item \">".$row['texte']."</li>";
    echo "<br>";
  };
}
?>
