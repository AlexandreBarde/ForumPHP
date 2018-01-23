<?php

require('Modeles/Modele.php');

function affAccueil()
{
    $contenu = testAccueil();
    require('Vues/vueAccueil.php');
}

function afficherMembres()
{
    $membres = getMembres();
    require('Vues/vueMembres.php');
}

function afficherMembre($id)
{
    $membre = getMembre($id);
    require('Vues/vueMembre.php');
}

?>