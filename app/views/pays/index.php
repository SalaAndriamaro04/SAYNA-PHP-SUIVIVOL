<?php
include('../app/views/header.php');
?>

  <!-- /.row -->
<div class="row">   
  <h1>Liste des pays </h1>
</div>

<div class="row">        
  <table class="table table-bordered table-striped">
    <thead>

    </thead>
    <tbody>
      <?php
        foreach ($pays as $p){
          echo '<tr>';
          echo '<td>',$p->name,'</td>';
          echo '<td>';
          // le . veut dire: passer par ce fichier index.php
          // toujours avec ?
          $url = '.?controller=Pays&action=edit&pays='.$p->id;
          $label= '<i class="fas fa-pen"></i>';
          $type= 'info';
          include ('../app/Views/components/button.php');
          
          $url = '.?controller=Pays&action=delete&pays='.$p->id;
          $label = '<i class="fa fa-trash"></i>';
          
          //coloration de l'icone en rouge
          $type = 'danger';
          include ('../app/Views/components/button.php');
          echo '</td>';
          echo '</tr>';
        }
      ?>
    </tbody>
  </table>      
         
</div>

<?php
include('../app/views/footer.php');
?>