<!DOCTYPE html>
<html>
  <head>
    <title>Blog CSA</title>
    <!-- gestion du header dans une page html -->
    <?php include 'includes/header.html'  ?>
  </head>
  <body id="idbody">
      <div id="id_site" class="main-container">
        <div id="idsite" class="container">
          <div class="row mt-2">
            <div id="idheadgch" class="col-sm-12 col-lg-3">
              <!-- titre du site dans le site -->
              <div class="titlesit text-center animated flash">CSA BLOG</div>
              <div class="input-group mb-3">
                  <div class="input-group-prepend">
                  <label class="input-group-text" for="sel_cat">Catégorie</label>
              </div>
              <!-- selecteur de catégorie lance javascript affichage.js -->
                  <select class="custom-select" id="sel_cat" onchange="ajax_aff_acceuil()">
                    <option selected>Choix...</option>
                    <?php include 'php/mod_categorie.php'; ?>
                  </select>
              </div>
              <!-- selecteur d'auteur lance fonction affichage.js -->
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <label class="input-group-text" for="sel_aut" >Auteur</label>
                </div>
                <select class="custom-select" id="sel_aut" onchange="ajax_aff_acceuil()">
                  <option selected>Choix...</option>
                  <?php include 'php/mod_auteur.php'; ?>
                </select>
              </div>
              <!-- selecteur d'filtres lance fonction affichage.js -->
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <label class="input-group-text" for="sel_filt">Filtre</label>
                </div>
                <select class="custom-select" id="sel_filt" onchange="ajax_aff_acceuil()">
                  <option selected>Choix...</option>
                  <option value="1">Nouveau</option>
                  <option value="2">Ancien</option>
                  <option value="3">Random</option>
                </select>
              </div>
              <!-- ul cible prévu pour l'affichage gauche des articles selectionnées-->
              <ul id="id_list_acc" class="list-group" /ul>
            </div>
              <div id="main_aff" class="col-sm-12 order-first order-lg-1 col-lg-8" tabindex="-4">
                <div id="buttons">
                  <button type="button" class="btn btn-primary mb-2" data-toggle="modal" data-target="#addart_Modal"  onclick="initart()">Add article</button>
                  <button type="button" class="btn btn-primary mb-2" data-toggle="modal" data-target="#addaut_Modal">Add auteur</button>
                  <button type="button" class="btn btn-primary mb-2" data-toggle="modal" data-target="#addcat_Modal">Add catégorie</button>
                </div>
                <!-- ul contenant l'affichage de l'article entier -->
                <ul  id="id_main_aff" /ul>
              </div>
              <!-- bouton de retour en haut de page-->
              <a id="gotop" href="#top">GOTOP</a>
            </div>
          </div>
        </div>
      <!-- modalz gestion-->
      <?php include 'includes/modalz.html'  ?>
      <!-- FOOTER -->
      <?php include 'includes/footer.html'  ?>
  </body>
</html>
