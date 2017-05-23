<?php
/*
*
*ajouter un utilisateur
*
*données requises:
*nom
*prenom
*email
*
**/
$cible = "#";

    ?> 

<?= $message; ?>

<div class="col-sm-12">
        <div class="col-sm-4">
            <form method="post" action= "<?= $cible ?>">

                <div class="form-group ">
                    <label>Nom</label>
                    <input type="text" name = "nom" class="form-control" id="inputNom" placeholder="Nom">
                </div>

                <div class="form-group">
                    <label>Prénom</label>

                    <input type="text"   name = "prenom" class="form-control" id="inputPrenom" placeholder="Prénom">
                </div>

                <div class="form-group">
                    <label>Email address</label>
                    <input type="email" name = "email" class="form-control" id="inputEmail" placeholder="Entrer mail">
                </div>
                    <button type="submit" class="btn btn-primary">Enregistrer</button>
                

            </form>



        </div>
    </div>

<?php 



?>

    <br>


 
  