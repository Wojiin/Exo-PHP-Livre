<?php

Class Livre{          
    //Attributs 
    protected $_titre;
    protected $_nbPages;
    protected $_parution;
    protected $_prix;
    protected $_auteur;
//Constructeur
    public function __construct($titre, $nbPages, $parution, $prix, $auteur){
        $this->_titre = $titre;             
        $this->_nbPages = $nbPages;              
        $this->_parution = $parution;
        $this->_prix = $prix;          
        $this->_auteur = $auteur;
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
    public function getAuteur() {
        return $this->_auteur;
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
    public function setAuteur($auteur) {
    $this->_auteur = $auteur;
    } 
}
$l1 = new Livre ("Ca","374","1986","20€","Stephen King");
echo $l1;