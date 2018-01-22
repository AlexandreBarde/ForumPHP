<!doctype html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
        <title><?= $titre ?></title>
    </head>
    <body>
        <nav class="navbar navbar-expand-md navbar-dark bg-primary">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsingNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand" href="/">NomDuForum</a>
            <div class="navbar-collapse collapse" id="collapsingNavbar">
                <ul class="navbar-nav">
                    <li class="nav-item text-center">
                        <a class="nav-link" href="/forums">Forums</a>
                    </li>
                    <li class="nav-item text-center">
                        <a class="nav-link" href="/membre">Membres</a>
                    </li>
                    <li class="nav-item text-center">
                        <a class="nav-link" href="/statistiques">Statistiques</a>
                    </li>
                    <li class="nav-item text-center">
                        <a class="nav-link" href="/connexion">Connexion</a>
                    </li>
                    <li class="nav-item text-center">
                        <a class="nav-link" href="/inscription">Inscription</a>
                    </li>
                </ul>

            </div>
        </nav>
        <?= $contenu ?>
    </body>
</html>