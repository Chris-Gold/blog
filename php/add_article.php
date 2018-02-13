<!-- Intergration de "auteur" dans la bdd -->
<?php

function insert_article($cnx){
       $titre = $_POST['titre'];
       $texte = $_POST['texte'];
       $auteur = $_POST['auteur'];
       $categorie = $_POST['categorie'];

       $recup_id_article = "SELECT id FROM article WHERE titre='$titre', '$texte', '$auteur','$categorie'";
       $stmt = $cnx->query($recup_id_article);

       $cnx=$stmt->fetch();
       //echo $row['id'];

       for ($i=0; $i < sizeof($article); $i++) {
           $cnx->query("INSERT INTO `article` (`id_article`) VALUES ('".$article[$i]."', '".$cnx['id']."')");
       }
       if ($cnx->query($sql) === TRUE) {
       echo "OK";
       } else {
       echo "Error: " . $sql . "<br>" . $cnx->error;
       }

$cnx->close();
}
?>


 <!-- Intergration de "auteur" dans la bdd -->
 <?php
 function insert_auteur($cnx){
        $nom = $_POST['nom'];
        $mail = $_POST['mail'];

        $recup_id_auteur = "SELECT id FROM article WHERE titre='$nom', '$mail'";
        $stmt = $cnx->query($recup_id_auteur);

        $cnx=$stmt->fetch();
        //echo $row['id'];

        for ($i=0; $i < sizeof($auteur); $i++) {
            $cnx->query("INSERT INTO `auteur` (`id_auteur`) VALUES ('".$auteur[$i]."', '".$cnx['id']."')");
            if ($cnx->query($sql) === TRUE) {
            echo "OK";
            }
            else {
            echo "Error: " . $sql . "<br>" . $cnx->error;
            }
        }
  }
  ?>
