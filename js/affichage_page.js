// Ouverture de la page
$(document).ready(function(){
  ajax_aff_acceuil();
});
// toggle descript article preview
function toggle(id){
  var idf = '#id'+id;
  $(idf).toggle();
}
// Go top the site
$(document).ready(function() {
     $('a[href=#top]').click(function(){
          $('html, body').animate({scrollTop:0}, 'slow');
          return false;
     });
});
//editor froala
$(function(){
  $('#edit').froalaEditor({
    language: 'fr'
  })
});
//Affichage général des articles listés par categorie auteur et filtre
function ajax_aff_acceuil(){
  $.ajax({
    url:'php/aff_list_article.php',
    data: { cat:$('#sel_cat option:selected').text(),
            aut:$('#sel_aut option:selected').text(),
            filt:$('#sel_filt option:selected').text()
    },
    type: 'post',
    success:function(output){
      $('#id_list_acc').html(output);
    }
  });
}
//Affichage complet d'un article
function ajax_aff_complet(id_article){
  $.ajax({
    url:'php/aff_article.php',
    data: {id_article:id_article},
    type: 'post',
    success:function(output){
      $('#id_main_aff').html(output);
      $('html, body').animate({
          scrollTop: $("#main_aff").offset().top
      }, 200);
      return false;
    }
  });
}
// ini du modal ajout article
function initart(){
  $('#titre_art').val(' ');
  $('#idtexted').val();
  $('#inputGroupSelect01 option:selected').text(' ');
  $('#inputGroupSelect02 option:selected').text(' ');
}
// fct ajout article bouton ajouter article
function ajax_add_article(){
  var titre = $('#titre_art').val();
  var text = $('#idtexted').html();
  var auteur = $('#inputGroupSelect01 option:selected').text();
  var categorie = $('#inputGroupSelect02 option:selected').text();
  $.ajax({
    url:'php/add_article.php',
    data: {titre:titre,text:text,auteur:auteur,categorie:categorie},
    type: 'post',
    success:function(){
      ajax_aff_acceuil();
    }
  });
}
// fct ajout categorie dans base de données
function ajax_add_categorie(){
  var categorie = $('#cat_name').val();
  $.ajax({
    url:'php/add_categorie.php',
    data: {categorie:categorie},
    type: 'post',
    success:function(output){
    }
  });
}
// fct ajout auteur dans base de données
function ajax_add_auteur(){
  var mail = $('#add_aut_mail').val();
  var nom = $('#add_aut_nom').val();
  $.ajax({
    url:'php/add_auteur.php',
    data: {mail:mail,nom:nom},
    type: 'post',
    success:function(output){
    }
  });
}
