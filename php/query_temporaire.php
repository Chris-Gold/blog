<?php
include 'link_db.php';

if ($_POST['filt']!='Choix...' && $_POST['cat']!='Choix...' && $_POST['aut'])!='Choix...') {
  # code...
}
else {
  # code...
}
if ($_POST['cat']!='Choix...') {
  //Affichage des articles de la categorie...
  $req = "SELECT * FROM article WHERE article.categorie= $_POST['cat']";
}

if ($_POST['aut'])!='Choix...') {
  # code...
}

//Affichage des articles par date de modification
$reqAffDown = "SELECT * FROM article ORDER BY date_modif DESC LIMIT 5";
$reqAffUp = "SELECT * FROM article ORDER BY date_modif ASC LIMIT 5 ";

//Affichage les articles de l'auteur...
$reqFiltNom = "SELECT * FROM article WHERE article.auteur= ";
//Affichage grouper par auteurs
$reqFiltNomUp = "SELECT * FROM article GROUP BY auteur ASC";
$reqFiltNomDown = "SELECT * FROM article GROUP BY auteur DESC";


//Affichage grouper par categorie
$reqFiltCatUp = "SELECT * FROM article GROUP BY categorie ASC";
$reqFiltCatDown = "SELECT * FROM article GROUP BY categorie DESC";

$result = mysqli_query($cnx, $req);
//Affiche la liste des articles

if(mysqli_num_rows($result) > 0){
  while ($row = mysqli_fetch_assoc($result)){
    echo "<div id=\"".$row['id_article']."\" onclick=\"ajax_aff_complet(this.id)\">";
    echo "<li class=\"list-group-item disabled\">Article n°".$row['id_article']." : ".$row['titre']."</li>";
    echo "<li class=\"list-group-item\">Categorie: ".$row['categorie']."</li>";
    echo "<li class=\"list-group-item \">".$row['auteur']." a créé(e) cet article le ".$row['date_crea']."</li>";
    echo "<li class=\"list-group-item \">".substr($row['texte'],0,65)."...</li>";
    echo "</div>";
  };
}



?>
