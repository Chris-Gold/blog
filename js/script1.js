// Ouverture de la page
$(document).ready(function(){
  ajax_aff_acceuil();
  //ajax_add_article();
  //ajax_add_categorie();
  //ajax_add_auteur();

});
//Affichage général
function ajax_aff_acceuil(){
  $.ajax({
    url:'php/query.php',
//    data: {tab_data:},
    type: 'get',
    success:function(output){
      $('#id_list_acc').html(output);
    }
  });
}
//Affichage complet
function ajax_aff_complet(id_article){
  $.ajax({
    url:'php/query2.php',
    data: {id_article:id_article},
    type: 'post',
    success:function(output){
      $('#id_main_aff').html(output);
    }
  });
}

function ajax_add_article(){
  var titre = $('#titre_art').val();
  var text = $('#text_art').val();
  var auteur = $('#inputGroupSelect01 option:selected').text();
  var categorie = $('#inputGroupSelect02 option:selected').text();
  //alert(titre+text+auteur+categorie);
  $.ajax({
    url:'php/add_article.php',
    data: {titre:titre,text:text,auteur:auteur,categorie:categorie},
    type: 'post',
    success:function(output){
      //$('#id_main_aff').html(output);
      //alert(output);
      ajax_aff_acceuil();
    }
  });
}

function ajax_add_categorie(){
  var categorie = $('#cat_name').val();
  $.ajax({
    url:'php/add_categorie.php',
    data: {categorie:categorie},
    type: 'post',
    success:function(output){
      //$('#id_main_aff').html(output);
      //alert(output);
    }
  });
}

function ajax_add_auteur(){
  var mail = $('#add_aut_mail').val();
  var nom = $('#add_aut_nom').val();
  $.ajax({
    url:'php/add_auteur.php',
    data: {mail:mail,nom:nom},
    type: 'post',
    success:function(output){
      //alert(output);
    }
  });
}
