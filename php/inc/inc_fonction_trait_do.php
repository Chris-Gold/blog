<?php
include 'inc_fonction_mysql.php';
function insert_article(){
  //recuperation des variable du post ajax et prépa des données
       $titre = $_POST['titre'];
       $texte = $_POST['text'];
       $auteur = $_POST['auteur'];
       $categorie = $_POST['categorie'];
       $date_crea = date("Y-m-d");
       $date_modif = $date_crea;
//créa de la requete sql
       $req_add_art = "INSERT INTO article (titre,texte,auteur,date_crea,date_modif,categorie) VALUES ('$titre','$texte','$auteur','$date_crea','$date_modif', '$categorie')";
       $ret_sql=req_mysql($req_add_art);
       close_mysql();
       if ($ret_sql==1) {
         return "Article ajouté";
       }
       else {
         return "Incomplet ou déjà existant, veuillez remplir à nouveau les champs";
       }
}
function insert_auteur(){
//recuperation des variable du post ajax et prépa des données
  $mail = $_POST['mail'];
  $nom = $_POST['nom'];
//créa de la requete sql
  $req_add_aut = "INSERT INTO auteur (nom,mail) VALUES ('$nom','$mail')";
  $ret_sql=req_mysql($req_add_aut);
  close_mysql();
  if ($ret_sql==1) {
    return "Auteur ajouté";
  }
  else {
    return "Incomplet ou déjà existant, veuillez remplir à nouveau les champs";
  }
}
function insert_categorie(){
//recuperation des variable du post ajax et prépa des données
  $categorie = $_POST['categorie'];
//créa de la requete sql
  $req_add_cat = "INSERT INTO categorie (nom) VALUES ('$categorie')";
  $ret_sql=req_mysql($req_add_cat);
  close_mysql();
  if($ret_sql==1){
    return "categorie ajoutee";
  }
  else {
    return "incomplet ou deja existant";
  }
}
function select_article(){
//recuperation des variable du post ajax et prépa des données
  $id_article = $_POST['id_article'];
//créa de la requete sql
  $req_aff_art = "SELECT * FROM article WHERE article.id_article=".$id_article;
  $temp = req_mysql($req_aff_art);
  close_mysql();
  return $temp;
}
function list_article(){
//recuperation des variable du post ajax et prépa des données
  $cat = $_POST['cat'];
  $aut = $_POST['aut'];
  $filt = $_POST['filt'];
//créa de la requete sql
  $req = "SELECT * FROM article";
  $where = 0;
  if ($cat!='Choix...') {
      $req = $req." WHERE article.categorie='".$cat."'";
      $where=1;
  }
  if ($aut!='Choix...') {
      if ($where==0) {
        $req = $req." WHERE article.auteur='".$aut."'";
        $where=1;
      }
      else {
        $req = $req." AND article.auteur='".$aut."'";
      }
  }
  if ($filt!='Choix...') {
    if ($filt=='Nouveau') {
      $req = $req." ORDER BY date_modif DESC";
    }
    if ($filt=='Ancien') {
      $req = $req." ORDER BY date_modif ASC";
    }
  }
  return req_mysql($req);
}
function list_auteur(){
    $req_list_auteur = "SELECT nom FROM auteur";
    return req_mysql($req_list_auteur);
}
function list_cat(){
    $req_select_cat = "SELECT nom FROM categorie";
    return req_mysql($req_select_cat);
}
/*
function list_table(nom,table){
  $req=""
}*/
?>
