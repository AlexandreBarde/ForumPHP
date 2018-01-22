<?php
/**
 * Created by PhpStorm.
 * User: Alexandre
 * Date: 22/01/2018
 * Time: 02:34
 */

require('Modeles/Modele.php');

function affTest()
{
    $contenu = test();
    require('Vues/vueTest.php');
}

function affTestParam()
{
    $contenu = testParam($_GET['id']);
    require('Vues/vueTest.php');
}

function affAccueil()
{
    $contenu = testAccueil();
    require('Vues/vueAccueil.php');
}

?>