<?php

require('Controleurs/Controleur.php');

if(isset($_GET['action']))
{
    if($_GET['action'] == 'membres')
    {
        afficherMembres();
    }
    elseif($_GET['action'] == 'membre')
    {
        if(isset($_GET['id']))
        {
            afficherMembre($_GET['id']);
        }
    }
    elseif($_GET['action'] == 'accueil')
    {
        affAccueil();
    }
    elseif($_GET['action'] == 'inscription')
    {
        afficherInscription();
    }
    else
    {
        afficherErreur();
    }
}
else
{
    affAccueil();
}