<?php

ob_start(); ?>

<div class="jumbotron jumbotron-fluid jumbotron-header bg-primary text-white">
    <h1 class="display-3 text-center jumbotron-title">Erreur</h1>
</div>

<div class="container">
    <a href="?action=accueil">Retour à l'accueil</a>
</div>

<?php $contenu = ob_get_clean(); ?>

<?php require('template.php'); ?>
