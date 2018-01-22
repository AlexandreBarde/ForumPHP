<?php
/**
 * Created by PhpStorm.
 * User: Alexandre
 * Date: 22/01/2018
 * Time: 03:28
 */

require('Controleurs/Controller.php');

if(isset($_GET['test']))
{
    if($_GET['test'] == 'affTest')
    {
        affTest();
    }
    elseif($_GET[test] == 'affTestParam')
    {
        affTestParam();
    }
    else
    {
        echo 'Erreur';
    }
}
else
{
    affAccueil();
}