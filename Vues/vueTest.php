<?php
    $this->titre = "Test";
?>

<?php ob_start(); ?>

<div class="jumbotron jumbotron-fluid">
    <div class="container">
        <h1 class="display-3">Oups</h1>
        <p class="lead">Yoplaboum></p>
        <hr class="my-4">
        <p class="lead">
            <a class="btn btn-primary btn-lg" href="#" role="button">Coucou</a>
        </p>
    </div>
</div>

<?php $contenu = ob_get_clean(); ?>

<?php require('template.php'); ?>
