<?php

$titre = $membre['pseudo'];

ob_start(); ?>

<br />
<div class="container">
    <div class="row">
        <div class="col">
            <img src="ImageProfil/<?= $membre['image']; ?>.png" class="rounded mx-auto d-block image-profil" alt="<?= $membre['pseudo']; ?>">
        </div>
        <div class="col col-lg-5hop">
            <p><?= $membre['pseudo'] ?>, <?= $membre['birthday'] ?> ans</p>
            <p>Phrase de statut</p>
            <p><?php
                $ranks = explode(",", $membre['rank']);
                for($i = 0; $i < sizeof($ranks); $i ++)
                {
                    echo '<span class="badge badge-primary">' .$ranks[$i] . '</span>';
                }
                ?>
            </p>
            <p>Localisation</p>
            <p>Dernière connexion</p>
        </div>
    </div>
</div>

<?php $contenu = ob_get_clean(); ?>

<?php require('template.php'); ?>
