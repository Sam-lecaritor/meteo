<?php
/**
* classe Ville
*
*
*
*/
class Ville
{
    protected $nom;
    protected $code_postal;
    protected $id;
    protected $date_crea;
    protected $date_maj;
    
    public function __construct($nom, $code_postal)
    {
        $this->nom = $nom;
        $this->code_postal  = $code_postal;
    }
    
    
    public function setNom($nom){
        $this->nom = $nom;
        return $this->nom;       
    }
    public function setEmail($code_postal){
        $this->code_postal = $code_postal;
        return $this->code_postal;
        
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
    public function getCode_postal(){return $this->code_postal;}
    public function getId(){return $this->id;}
    public function getDate_crea(){return $this->date_crea;}
    public function getDate_maj(){return $this->date_maj;}
    
    
    
}
