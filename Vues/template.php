<!doctype html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
        <link rel="stylesheet" href="Vues/css/style.css">
        <title><?= $titre ?></title>
    </head>
    <body>
        <nav class="navbar navbar-expand-md navbar-dark bg-primary">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsingNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand" href="?action=accueil">NomDuForum</a>
            <div class="navbar-collapse collapse" id="collapsingNavbar">
                <ul class="navbar-nav">
                    <li class="nav-item text-center">
                        <a class="nav-link" href="?action=#">Forums</a>
                    </li>
                    <li class="nav-item text-center">
                        <a class="nav-link" href="?action=membres">Membres</a>
                    </li>
                    <li class="nav-item text-center">
                        <a class="nav-link" href="?action=#">Statistiques</a>
                    </li>
                </ul>
                <ul class="navbar-nav ml-auto">
                    <li class="text-center nav-item">
                        <a class="nav-link" href="?action=#">Connexion</a>
                    </li>
                    <li class="text-center nav-item">
                        <a class="nav-link" href="?action=inscription">Inscription</a>
                    </li>
                </ul>
            </div>
        </nav>
        <?= $contenu ?>
        <script src="https://code.jquery.com/jquery-3.2.1.js"
                integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="
                crossorigin="anonymous"></script>
        <script type="text/javascript" src="Vues/js/script.js"></script>
    </body>
</html>