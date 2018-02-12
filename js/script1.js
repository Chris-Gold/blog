// Ouverture de la page
$(document).ready(function(){
ajax_aff_acceuil();
});

function ajax_aff_acceuil(){
  $.ajax({
    url:'php/query.php',
//    data: {tab_data:tab_data},
    type: 'get',
    success:function(output){
      $('#id_list_acc').html(output);
    }
  });
}
