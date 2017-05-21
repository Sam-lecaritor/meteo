<?php 
require "controleurs/controler.php";
include "template/composants/header.php";
include "template/composants/navbar.php";

if($vue){
include $vue;  
}

include "template/composants/footer.php";
?>

