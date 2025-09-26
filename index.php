<?php
function appel($classe){
    require($classe.".class.php");
}

spl_autoload_register("appel");









/*Constructeur
    public function __construct($titre, $nbPages, $parution, $prix, $auteur){
        $this->_titre = $titre;             
        $this->_nbPages = $nbPages;              
        $this->_parution = $parution;
        $this->_prix = $prix;          
        $this->_auteur = $auteur;
    }*/