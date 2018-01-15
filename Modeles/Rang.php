<?php

/**
 * Created by PhpStorm.
 * User: Alexandre
 * Date: 15/01/2018
 * Time: 14:33
 */

class Rang
{

    private $id_rang;
    private $nom;
    private $puissance;

    public function getIdRang()
    {
        return $this->id_rang;
    }

    public function setIdRang($id_rang)
    {
        $this->id_rang = $id_rang;
    }

    public function getNom()
    {
        return $this->nom;
    }

    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    public function getPuissance()
    {
        return $this->puissance;
    }

    public function setPuissance($puissance)
    {
        $this->puissance = $puissance;
    }

    public function getFields()
    {
        return array(
            'id_rang' => $this->getIdRang(),
            'nom' => $this->nom,
            'puissance' => $this->puissance
        );
    }

}