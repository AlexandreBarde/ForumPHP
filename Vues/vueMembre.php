<?php

$titre = $membre['pseudo'];

ob_start(); ?>

<div class="container">
    <div class="row">
        <div class="col">
            <img src="ImageProfil/<?= $membre['image']; ?>.png" class="rounded mx-auto d-block image-profil" alt="<?= $membre['pseudo']; ?>">
        </div>
        <div class="col col-lg-5hop">
            <p><?= $membre['pseudo'] ?></p>
            <p>Phrase de statut</p>
            <p>Sexe</p>
            <p>Âge</p>
            <p>Localisation</p>
            <p>Dernière connexion</p>
        </div>
    </div>
</div>

<?php $contenu = ob_get_clean(); ?>

<?php require('template.php'); ?>
