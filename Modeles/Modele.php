<?php

function test()
{
    return "ok";
}

function testParam($param)
{
    return $param;
}

function testAccueil()
{
    return "done";
}

function getMembres()
{
    $db = dbConnexion();
    $membres = $db->prepare('SELECT * from user');
    $membres->execute();
    return $membres;
}

function getMembre($id)
{
    $db = dbConnexion();
    $req = $db->prepare('SELECT * from user WHERE id = ?');
    $req->execute(array($id));
    $membre = $req->fetch();
    return $membre;
}

function getRank($id)
{
    $db = dbConnexion();
    $req = $db->prepare('SELECT title from rank WHERE id_rank = ?');
    $req->execute(array($id));
    $rank = $req->fetch();
    return $rank['title'];
}

function dbConnexion()
{
    try
    {
        $db = new PDO('mysql:host=localhost;dbname=Forum;charset=utf8', 'root', '');
        return $db;
    }
    catch(Exception $e)
    {
        die('Erreur : '.$e->getMessage());
    }
}



?>