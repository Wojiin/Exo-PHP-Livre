<?php

Class Auteur{          
    //Attributs 
    protected $_nom;
    protected $_prenom;

//Constructeur
    public function __construct($nom, $prenom){
        $this->_nom = $nom;             
        $this->_prenom = $prenom;              
    }
//toString
    public function __toString() {
        return "{$this->_nom}{$this->_prenom}";
    }
//Getters 
    public function getNom() {
        return $this->_nom;
    }
    public function getPrenom() {
        return $this->_prenom;
    }
//Setters
    public function setTitre($nom) {
    $this->_nom = $nom;
    }   
    public function setPrenom($prenoms) {
    $this->_prenom = $prenom;
    }  
}