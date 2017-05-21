<?php

namespace App;
/**
* classe Utilisateur
*
*
*
*/
class Utilisateur
{
    private $nom;
    private $prenom;
    private $email;
    private $id;
    private $date_crea;
    private $date_maj;

    
    public function __construct($nom, $prenom, $email)
    {
        $this->nom  = $nom;
        $this->prenom  = $prenom;
        $this->email  = $email;
    }
    
    
    public function setNom($nom){
        $this->nom = $nom;
        return $this->nom;       
    }
    public function setPrenom($prenom){
        $this->prenom = $prenom;
        return $this->prenom;      
    }
    public function setEmail($email){
        $this->email = $email;
        return $this->email;
        
    }
    public function setDate_crea($date_crea){
        $this->date_crea = $date_crea;
        return $this->date_crea;
    }
    public function setDate_maj($date_maj){
        $this->date_maj = $date_maj;
        return $this->date_maj;
            
    }
    
    
    public function getNom(){return $this->nom;}
    public function getPrenom(){return $this->prenom;}
    public function getEmail(){return $this->email;}
    public function getId(){return $this->id;}
    public function getDate_crea(){return $this->date_crea;}
    public function getDate_maj(){return $this->date_maj;}
    
    
    
}
