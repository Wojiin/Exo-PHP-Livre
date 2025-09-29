<?php

Class Auteur{          
    //Attributs
    private string $_prenom; 
    private string $_nom;
    private array $_livres;
    private string $_dateNaissance;
    
    
//Constructeur
    public function __construct($nom, $prenom, $dateNaissance){
        $this->_nom = $nom;             
        $this->_prenom = $prenom;
        $this->_livres = [];
        $this->_dateNaissance = $dateNaissance;         
    }
//toString
    public function __toString() {
        return "{$this->_nom} {$this->_prenom} {$this->dateNaissance} {$this->livres}";
    }
//Getters 
    public function getNom() {
        return $this->_nom;
    }
    public function getPrenom() {
        return $this->_prenom;
    }
    public function getDateNaissance() {
        return $this->_dateNaissance;
    }

//Setters
    public function setNom($nom) {
        $this->_nom = $nom;
    }   
    public function setPrenom($prenom) {
        $this->_prenom = $prenom;
    }

    public function ajouterLivre(Livre $livre){
        $this->_livres[] = $livre; 
    }
    
    public function afficheAge(){        
        $dateTimeNaiss = new DateTime($this->_dateNaissance);
        $dateActuelle = new DateTime();
        $age = $dateActuelle->diff($dateTimeNaiss);
        echo "L'âge est de : ";
        echo $age->y . " ans, ";
        //echo $age->m . " mois, ";
        //echo $age->d . " jours, ";
        //echo $age->h . " heures, ";
        //echo $age->i . " minutes, ";
        //echo $age->s . " secondes.";
    
    }
}
