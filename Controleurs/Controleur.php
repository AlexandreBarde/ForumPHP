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

    if($membre['sexe'] == 'h')
    {
        $membre['sexe'] = "homme";
    }
    else if($membre['sexe'] == 'f')
    {
        $membre['sexe'] = "femme";
    }
    else
    {
        $membre['sexe'] = "autre";
    }

    $ranks = explode(",", $membre['rank']);

    $membre['rank'] = "";

    for($i = 0; $i < sizeof($ranks); $i++)
    {
        if($i == sizeof($ranks) - 1)
        {
            $membre['rank'] = $membre['rank'] . getRankTitle($ranks[$i]);
        }
        else
        {
            $membre['rank'] = $membre['rank'] . getRankTitle($ranks[$i]) . ",";
        }
    }

    require('Vues/vueMembre.php');
}

function getRankTitle($id)
{
    $rank = getRank($id);
    return $rank;
}

?>