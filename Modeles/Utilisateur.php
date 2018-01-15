<?php

/**
 * Created by PhpStorm.
 * User: Alexandre
 * Date: 15/01/2018
 * Time: 02:49
 */

class Utilisateur
{

    private $id;
    private $pseudo;
    private $mail;
    private $civilite;
    private $id_rang;
    private $date_naissance;

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getPseudo()
    {
        return $this->pseudo;
    }

    public function setPseudo($pseudo)
    {
        $this->pseudo = $pseudo;
    }

    public function getMail()
    {
        return $this->mail;
    }

    public function setMail($mail)
    {
        $this->mail = $mail;
    }

    public function getCivilite()
    {
        return $this->civilite;
    }

    public function getIdRang()
    {
        return $this->id_rang;
    }

    public function setIdRang($id_rang)
    {
        $this->id_rang = $id_rang;
    }

    public function getDateNaissance()
    {
        return $this->date_naissance;
    }

    public function setDateNaissance($date_naissance)
    {
        $this->date_naissance = $date_naissance;
    }

    public function getFields()
    {
        return array(
            'id_utilisateur' => $this->getId(),
            'pseudo' => $this->getPseudo(),
            'mail' => $this->getMail(),
            'civilite' => $this->getCivilite(),
            'id_rang' => $this->getIdRang(),
            'date_naissance' => $this->getDateNaissance()
        );
    }

}