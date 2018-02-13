<!-- Intergration de "auteur" dans la bdd -->
<?php
include 'link_db.php';
function insert_article($cnx){
       $titre = $_POST['titre'];
       $texte = $_POST['texte'];
       $auteur = $_POST['auteur'];
       $categorie = $_POST['categorie'];

       $req_add_art = "INSERT INTO article (titre, texte,auteur, date_crea, date_modif, categorie) VALUES ('$titre', '$texte', '$auteur', '$date_crea', '$date_modif', '$categorie')";
       $stmt = mysqli_query($cnx, $req_add_art);

       if ($cnx->query($sql) === TRUE) {
       echo "OK";
       } else {
       echo "Error: " . $sql . "<br>" . $cnx->error;
       }
}
insert_article($cnx);
?>
