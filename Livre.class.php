<?php

Class Livre{          
    //Attributs 
    private string $_titre;
    private int $_nbPages;
    private int $_parution;
    private float $_prix;
    private Auteur $_auteur;

//Constructeur
    public function __construct($titre, $nbPages, $parution, $prix, Auteur $auteur){
        $this->_titre = $titre;             
        $this->_nbPages = $nbPages;              
        $this->_parution = $parution;
        $this->_prix = $prix;          
        $this->_auteur = $auteur;
        $auteur-> ajouterLivre($this);
    }
//toString
    public function __toString() {
        return "{$this->_titre}{$this->_nbPages}{$this->_parution}{$this->_prix}{$this->_auteur}";
    }
//Getters
    //Getter 
    public function getTitre() {
        return $this->_titre;
    }
    public function getNbPages() {
        return $this->_nbPages;
    }
    public function getParution() {
        return $this->_parution;
    }
    public function getPrix() {
        return $this->_prix;
    }

//Setters
    public function setTitre($titre) {
    $this->_titre = $titre;
    }   
    public function setNbPages($nbPages) {
    $this->_nbPages = $nbPages;
    }   
    public function setParution($parution) {
    $this->_parution = $parution;
    }   
    public function setPrix($prix) {
    $this->_prix = $prix;
    }
//Infos
    public function infosLivre($l){
        echo "Infos livre $l <br>
              ******************* <br>
              Nom et Prénom de l'auteur : {$this->_auteur} <br>
              Titre : {$this->_titre} <br>
              Parution : {$this->_parution} <br>
              Prix : {$this->_prix}€";
    } 
}