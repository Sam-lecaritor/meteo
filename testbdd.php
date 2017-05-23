<?php
 
// connexion à la base de données
try
{
    $bdd = new PDO ('mysql:host=localhost;dbname=test', 'root', '');
    $bdd -> exec("set names utf8");
}
catch (Exception $e)
{
    die('Erreur : ' . $e->getMessage());
}
 
// vérification si le champ pseudo a bien été rempli
if (isset($_POST['pseudo']))
{
 
// Alors dans ce cas on met saisie du $_POST['pseudo'] dans la variable $pseudo
    $pseudo = htmlentities($_POST['pseudo']);
     
    // On insère la variable pseudo qui correspond à la saisie de l'utilisateur dans la requête SQL
    $sql = $bdd->prepare('SELECT PSEUDO FROM users WHERE PSEUDO = \''.$pseudo.'\';');
    $sql->execute(array('.$pseudo.' => $_POST['pseudo']));
 
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
    $req = "Insert INTO users (PSEUDO) VALUES ('" .$pseudo. "')";
    // Test de vérification pour savoir si la requête s'execute bien
    $bdd->exec($sql) or die ("pb insert");
    }
}