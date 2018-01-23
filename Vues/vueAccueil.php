<?php $titre = 'Accueil';

ob_start(); ?>

<h1>Bienvenue sur NomDuforum</h1>

<?php $contenu = ob_get_clean(); ?>

<?php require('template.php'); ?>
