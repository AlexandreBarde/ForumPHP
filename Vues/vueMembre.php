<?php

ob_start(); ?>

<div class="jumbotron jumbotron-fluid jumbotron-header bg-primary text-white">
    <h1 class="display-3 text-center jumbotron-title"><?= $membre['pseudo'] ?></h1>
</div>


<?php $contenu = ob_get_clean(); ?>

<?php require('template.php'); ?>
