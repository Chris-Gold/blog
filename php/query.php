<?php
include 'link_db.php';
$reqAff = "SELECT * FROM article ORDER BY date_crea DESC";
$result = mysqli_query($cnx, $reqAff);

if(mysqli_num_rows($result) > 0){
  while ($row = mysqli_fetch_assoc($result)){
    echo "<li>".$row['titre']."</li>";
    echo "<li>".$row['auteur']."</li>";
    echo "<li>".$row['texte']."</li>";
    echo "<br>";
  };
}
?>
