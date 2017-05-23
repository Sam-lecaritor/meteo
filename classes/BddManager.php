<?php
namespace App;

use PDO;

class BddManager
{
    private $bdd;
    
      
    public function __construct()
    {
    }
    
    public function connect()
    {

        if ($this->bdd == null) {
            try {
       // On se connecte à MySQL
                $base = new PDO('mysql:host=localhost;dbname=meteogroland;charset=utf8', 'root', 'samroot');
                $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                return $this->bdd = $base;
            } catch (Exception $e) {
       // En cas d'erreur, on affiche un message et on arrête tout
                die('Erreur de connexion a la bdd : '.$e->getMessage());
            }
        }
    }
    
    public function selectioner()
     {
        $content=[];
        $datas = $this->bdd->query('SELECT * FROM users');
        return $datas;
    }

    public function enregistrerUtilisateur($datas){
    $bdd=$this->connect();

    $donnees = $datas;
    $nom = $donnees['nom'];
    $prenom = $donnees['prenom'];
     
    // On insère la variable pseudo qui correspond à la saisie de l'utilisateur dans la requête SQL
    $sql = $bdd->prepare('SELECT nom, prenom FROM users WHERE nom = :nom AND prenom = :prenom;');
    $sql->bindValue(':nom', $nom);
    $sql->bindValue(':prenom', $prenom);
    $sql->execute();
    // recherche de résultat
    $res = $sql->fetch();
 
    if ($res)
    {
// S'il y a un résultat, c'est à dire qu'il existe déjà un pseudo, alors "Ce pseudo est déjà utilisé"
        echo "Ce pseudo est déjà utilisé !";
    }
// Sinon le résultat est nul ce qui veut donc dire qu'il ne contient aucun pseudo, donc on insère
    else
    {
    echo "Ce pseudo n'a jamais été utilisé";
$req = $bdd->prepare('INSERT INTO users (nom, prenom, email) VALUES(?, ?, ?)');
$req->execute(array($donnees['nom'], $donnees['prenom'], $donnees['email']));

    }

    }

}