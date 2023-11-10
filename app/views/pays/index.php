<?php
include('../app/views/header.php');
?>

  <!-- /.row -->
  <div class="row">
      <div class="col-12">
          <div class="card">
              <h1>Liste des pays </h1>
              <?= 
              //si on n'utilise pas $$key dans view.php
              //var_dump($this->params['pays']) 
              var_dump($pays);
              ?>
             
            </div>
        </div>  
      </div>

<?php
include('../app/views/footer.php');
?>