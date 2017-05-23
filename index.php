<?php 
require "controleurs/controler.php";
include "template/composants/header.php";
include "template/composants/navbar.php";
?>


<?php 
if($vue){
include $vue;  
}
?>

<?php 
include "template/composants/footer.php";
?>

