<?php
include('../app/views/header.php');
?>

  <!-- /.row -->
<div class="row">   
  <h1> <?= $pays->name ?> </h1>
</div>

<div class="row"> 
    Confirmez la suppression       
  <form class="" action=".?controller=Pays&action=deleteConfirm" method="POST">
    <input type="hidden" name="pays" value="<?= $pays->id ?>" />
    <input type="submit" value="Supprimez le pays" />
    <a href=".?controller=Pays&action=index"> Retour </a>
  </form>
</div>

<?php
include('../app/views/footer.php');
?>