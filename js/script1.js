// Ouverture de la page
$(document).ready(function(){
  ajax_aff_acceuil();
  ajax_add_article();
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
  var titre = 'test1';
  var text = 'bonjour et bienvenue';
  var auteur = 'Chris';
  var categorie = 'Sport';
  $.ajax({
    url:'php/add_article.php',
    data: {titre:titre,text:text,auteur:auteur,categorie:categorie},
    type: 'post',
    success:function(output){
      //$('#id_main_aff').html(output);
      alert("add done");
    }
  });
}
