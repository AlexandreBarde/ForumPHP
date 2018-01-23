<?php

$titre = $membre['pseudo'];

ob_start(); ?>

<div class="jumbotron jumbotron-fluid jumbotron-header bg-primary text-white">
    <h1 class="display-3 text-center jumbotron-title"><?= $membre['pseudo'] ?></h1>
    <img src="ImageProfil/<?= $membre['image']; ?>.png" class="rounded mx-auto d-block image-profil" alt="<?= $membre['pseudo']; ?>">
</div>



<?php $contenu = ob_get_clean(); ?>

<?php require('template.php'); ?>
