<!DOCTYPE html>
<html>
  <head>
    <title>Blog</title>
    <?php include 'includes/header.html'  ?>
  </head>
  <body id="idbody">
      <div id="id_site" class="main-container">
        <div id="idsite" class="container">
          <div class="row">
            <div id="idheadgch" class="col-sm-12 col-lg-4">
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addart_Modal" data-whatever="@mdo">Add article</button>
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addaut_Modal" data-whatever="@fat">Add auteur</button>
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addcat_Modal" data-whatever="@getbootstrap">Add catégorie</button>

            </div>
            <div id="idheadmil" class="col-sm-12 col-lg-4 text-center animated flash">CSA BLOG</div>
            <div id="idheaddrt" class="col-sm-12 col-lg-4">
            </div>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-sm-12 col-lg-4"><ul id="id_list_acc" class="list-group" /ul></div>
            <div class="col-sm-12 col-lg-8"><ul id="id_main_aff" /ul></div>

          </div>
        </div>
      </div>
      <!-- modalz -->
      <?php include 'includes/modalz.html'  ?>

      <!-- FOOTER -->
      <?php include 'includes/footer.html'  ?>
  </body>
</html>
