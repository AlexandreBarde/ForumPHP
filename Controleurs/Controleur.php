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
    if($membre['image'] != 'default')
    {
        $membre['image'] = $membre['id'];
    }
    else
    {
        $membre['image'] = 'default';
    }
    require('Vues/vueMembre.php');
}

?>