<?php
namespace App;
use PDO;




class BddManager{
    private  $bdd;
    
      
    public function __construct(){
        
    }
    
    public function connect(){   

        if($this->bdd == null){
            try
                {
	   // On se connecte à MySQL
        $base = new PDO('mysql:host=localhost;dbname=meteogroland;charset=utf8', 'root', 'samroot');
        $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);       
        return $this->bdd = $base;
            }
            catch(Exception $e)
            {
	   // En cas d'erreur, on affiche un message et on arrête tout
                die('Erreur de connexion a la bdd : '.$e->getMessage());
            }
        }   
}
    
    public function selectioner(){
        $content=[];
        $datas = $this->bdd->query('SELECT * FROM users');
      
          /*  while ($donnees = $datas->fetch())
            {
                $content[]['nom']= $donnees['nom']; 
                $content[]['prenom']= $donnees['prenom'];  
                $content[]['email']= $donnees['email']; 
                 
            } */  
  return $datas;

    }
    
    
    
    
}