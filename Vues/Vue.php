<?php

/**
 * Created by PhpStorm.
 * User: Alexandre
 * Date: 16/01/2018
 * Time: 14:40
 */

class Vue
{

    private $template = null;
    private $titre;
    private $contenu;

    public function __construct($template)
    {
        $this->template = 'vue' . $template . '.php';
    }

    public function generate(array $donnees = array())
    {
        $this->contenu = $this->render($this->template, $donnees);
        $vue = $this->render('template.php', array(
            'titre' => $this->titre,
            'contenu' => $this->contenu
        ));
        echo $vue;
    }

    public function render($template, array $donnees)
    {
        extract($donnees);
        ob_start();
        include($template);
        return ob_get_clean();
    }

}