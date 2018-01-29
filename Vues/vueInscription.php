<?php $titre = 'Inscription';

ob_start(); ?>

<div class="jumbotron jumbotron-fluid jumbotron-header bg-primary text-white">
    <h1 class="display-3 text-center jumbotron-title">Inscription</h1>
</div>

<div class="container" id="auth">
    <div class="row">
        <div class="col-xl-4 offset-xl-4 col-lg-4 offset-lg-4">
            <form action="#" method="post">
                <div class="form-group">
                    <label for="username">Nom d'utilisateur</label>
                    <input required class="form-control" type="text" name="username" id="username">
                </div>
                <div class="form-group">
                    <label for="email">Adresse email</label>
                    <input required class="form-control" type="text" name="email" id="email">
                </div>
                <div class="dropdown-divider"></div>
                <div class="form-group">
                    <label for="password">Mot de passe</label>
                    <input required class="form-control" type="password" name="password" id="password">
                </div>
                <div class="form-group">
                    <label for="passwordCheck">Confirmation du mot de passe</label>
                    <input required class="form-control" type="password" name="passwordCheck" id="passwordCheck">
                </div>
                <div class="dropdown-divider"></div>
                <div class="form-group">
                    <label for="date">Date d'anniversaire</label>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="far fa-calendar-alt"></i></span>
                        <input required class="datepick form-control" id="date" type="text" name="date"/>
                    </div>
                </div>
                <div class="form-group">
                    <label for="sexe">Sexe</label>
                    <select required  class="form-control" id="sexe" name="sexe">
                        <option value="0">Homme</option>
                        <option value="1">Femme</option>
                        <option value="2">Autre</option>
                    </select>
                </div>
                <div class="dropdown-divider"></div>
                <div class="form-group">
                    <button class="btn btn-primary" id="login" type="submit">S'inscrire</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php $contenu = ob_get_clean(); ?>

<?php require('template.php'); ?>
