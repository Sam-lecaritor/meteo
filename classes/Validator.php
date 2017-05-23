<?php

namespace App;

class Validator
{

    private $test;



    private function nettoyerNom($nom)
    {
        $this->test = trim($nom);
        $this->test = htmlspecialchars($this->test);
        $this->test = filter_var($this->test, FILTER_SANITIZE_STRING);
        return $this->test;
    }

    private function nettoyerMail($email)
    {
        $email2 = filter_var($email, FILTER_SANITIZE_EMAIL);
        $email2 = filter_var($email2, FILTER_VALIDATE_EMAIL);
          return $email;
    }


    private function formaterNom($nom)
    {
        $nom2 = $this->nettoyerNom($nom);
        $nom2 = ucfirst($nom2);
        return $nom2;
    }


    public function validerNom($nom)
    {

        $nom2 = $this->formaterNom($nom);
        if ($nom) {
            return $nom2;
        } else {
            return false;
        }
    }


    public function validerMail($email)
    {
        if ($email) {
            return $email;
        } else {
            return false;
        }
    }

/*
*@params array assoc
*nom =>
*prenom =>
*email =>
*
*
*/

    public function validerInscription($data)
    {
        $datas['nom'] = $this->validerNom($data['nom']);
        $datas['prenom'] = $this->validerNom($data['prenom']);
        $datas['email'] = $this->validerMail($data['email']);

        if (($datas['nom'] && $datas['prenom'] && $datas['email'])) {
            $datas['status']=1;
            $datas['message'] = "<h1 class= 'text-center'></h1> 
           <div class='alert alert-success'>
  <strong>Success!</strong> test passé " . $datas['nom'] . " enregistré </div>";
            return $datas;
        } else {
            $datas['status']=0;
            $datas['message'] = "<div class='alert alert-danger'>
  <strong>Danger!</strong> information incorrects
</div>";
            return $datas;
        }
    }
}
