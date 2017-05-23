<?php 
/*
*
*vue pour la liste total des users 
*page d'accueil des utilisateurs
*
**/
    ?>  
<div class="text-center">
    <h1>liste des utilisateurs</h1>
</div>


<?php 

if($content):
    ?>  
    
<div class="container">    
  <div class="row">
   <?php  
    
foreach($content as $key=>$value):
 
    ?>

         <div class="col-sm-3">
          <div class="panel panel-primary">
            <div class="panel-heading"><?= $value["nom"] ." ". $value["prenom"] ?></div>
            <div class="panel-body"><img src="http://pre14.deviantart.net/04fa/th/pre/i/2015/012/0/3/p8x62axl_by_yourlovelytimelady-d8do89v.jpg" class="img-responsive" style="width:50%" alt="Image">
            </div>
        <div class="panel-footer"><?= "mail: " . $value["email"] . "<br>" . "inscrit depuis le : <br>" . $value["date_crea"] ?></div>
      </div>
    </div>
        <?php endforeach; ?>
        <?php endif; ?>
         
</div>
</div><br>