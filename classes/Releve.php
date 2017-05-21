<?php
/**
* classe Releve
*
*
*
*/
class Releve
{
    protected $nomVille;
    protected $nomUtilisateur;
    protected $valeur;
    protected $id;
    protected $date_crea;
    protected $date_maj;
    
    public function __construct($nomVille, $nomUtilisateur, $valeur)
    {
        $this->nomVille = $nomVille;
        $this->nomUtilisateur = $nomUtilisateur;
        $this->valeur  = $valeur;
    }
    
    
    public function setNom($nomVille){
        $this->nomVille = $nomVille;
        return $this;       
    }
    public function setPrenom($nomUtilisateur){
        $this->nomUtilisateur = $nomUtilisateur;
        return $this;      
    }
    public function setValeur($valeur){
        $this->valeur = $valeur;
        return $this;
        
    }
    public function setDate_crea($date_crea){
        $this->date_crea = $date_crea;
        return $this;
    }
    public function setDate_maj($date_maj){
        $this->date_maj = $date_maj;
        return $this;
            
    }
    
    
    public function getNomVille(){return $this->nomVille;}
    public function getNomUtilisateur(){return $this->nomUtilisateur;}
    public function getValeur(){return $this->valeur;;}
    public function getId(){return $this->id;}
    public function getDate_crea(){return $this->date_crea;}
    public function getDate_maj(){return $this->date_maj;}
    
    
    
}
