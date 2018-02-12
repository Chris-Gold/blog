<?php
include 'link_db.php';

$reqAff = "SELECT * FROM 'articles' ORDER BY 'date crea' DESC";
$result = mysqli_query($cnx, $reqAff);

if (mysqli_num_rows($result)>0){

}
?>

<?php echo 'FirsttestSZ' ?>
