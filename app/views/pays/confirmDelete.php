<?php
include('../app/views/header.php');
?>

  <!-- /.row -->
<div class="row">   
  <h1> <?= $pays->name ?> </h1>
</div>

<div class="row"> 
    <h4>Confirmez la suppression</h4>
  <form class="" action=".?controller=Pays&action=deleteConfirm" method="POST">
    <input type="hidden" name="pays" value="<?= $pays->id ?>" />
    <input type="submit" value="Supprimez le pays" />
    <br>
    <a href=".?controller=Pays&action=index"> Retour </a>
    <br><br>
  </form>
</div>

<?php
include('../app/views/footer.php');
?>