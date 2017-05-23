<?php

namespace App;

use PDO;

class UtilisateurManager
{
    
    private $base;
    private $content=[];
    
    
    public function __construct()
    {
        $this->base = new BddManager();
        $this->base->connect();
        return $this->base;
    }
    
    
    public function lister()
    {
        $liste = $this->base->selectioner();
        while ($donnees = $liste->fetch(PDO::FETCH_ASSOC)) {
                $content[]= $donnees;
        }
        return $this->content =$content;
    }
    
    
    public function afficherListeUser($content)
    {
 
        foreach ($content as $key => $value) {
                 $this->content[]= $value;
        }
        return $content;
    }

    public function enregistrerUser($datas)
    {
        if ($datas['status']== 1) {
        } elseif ($datas['status']== 0) {
        }
    }
}
