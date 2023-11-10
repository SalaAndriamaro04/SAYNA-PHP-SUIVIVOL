<?php
include('../app/views/header.php');
?>

  <!-- /.row -->
<div class="row">   
  <h1> <?= $pays->name ?> </h1>
</div>

<div class="row">        
  <form class="" action=".?controller=Pays&action=update" method="POST">
    <input type="hidden" name="pays" value="<?= $pays->id ?>" />
    <input type="text" name="name" value="<?= $pays->name ?>"/>
    <input type="submit" />
  </form>
</div>

<?php
include('../app/views/footer.php');
?>