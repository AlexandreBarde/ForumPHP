<?php $titre = 'Connexion';

ob_start(); ?>

<div class="jumbotron jumbotron-fluid jumbotron-header bg-primary text-white">
    <h1 class="display-3 text-center jumbotron-title">Connexion</h1>
</div>

<div class="container" id="auth">
    <div class="row">
        <div class="col-xl-4 offset-xl-4 col-lg-4 offset-lg-4">
            <form action="#" method="post">
                <div class="form-group">
                    <label for="username">Nom d'utilisateur ou adresse email</label>
                    <input required class="form-control" type="text" name="username" id="username">
                </div>
                <div class="dropdown-divider"></div>
                <div class="form-group">
                    <label for="password">Mot de passe</label>
                    <input required class="form-control" type="password" name="password" id="password">
                </div>
                <div class="dropdown-divider"></div>
                <div class="form-group">
                    <button class="btn btn-primary" id="login" type="submit">Se connecter</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php $contenu = ob_get_clean(); ?>

<?php require('template.php'); ?>
