<?php

Class Auteur{          
    //Attributs
    private string $_prenom; 
    private string $_nom;
    private array $_livres;
    private string $_age;
    
//Constructeur
    public function __construct($nom, $prenom){
        $this->_nom = $nom;             
        $this->_prenom = $prenom;
        $this->_livres = [];
        $this->_age = $age;             
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
    public function getAge(){
        return $this->_age;
    }
//Setters
    public function setTitre($nom) {
        $this->_nom = $nom;
    }   
    public function setPrenom($prenoms) {
        $this->_prenom = $prenom;
    }
    public function setBirthdate($birthDate){
        $this->_birthDate = $birthDate;
    }
    public function ajouterLivre(Livre $livre){
    $this->_livres[] = $livre; 
    }
    public function afficheAge(){}
    
}