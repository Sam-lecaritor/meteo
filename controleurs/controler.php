<?php


// autoloader de composer
require('vendor/autoload.php');


/*
*
*debut
*utilisation de monolog pour la journalisation
*
*/
use Monolog\Logger;
use Monolog\Handler\StreamHandler;
use Monolog\Handler\FirePHPHandler;

// On test que le dossier logs existe, sinon on le crée
if(! (file_exists('logs') && is_dir('logs')))
        mkdir('logs',0775);

// Initialisation des loggers avec monolog
$log = new Logger('test_logger');
// Ce logger enregistrera tous les messages, DEBUG étant le niveau le moins important
$log->pushHandler(new StreamHandler('logs/all.log', Logger::DEBUG));
// Ce logger enregistera tous les messages ayant un niveau supérieur ou égal à WARNING
$log->pushHandler(new StreamHandler('logs/min_warning.log', Logger::WARNING));

//$log->debug('Message de debug');
//$log->warn('Message de warning');
//$log->emerg('Grosse Erreur !!!!');

/*
*
*fin
*utilisation de monolog pour la journalisation
*
*/


$vue="";
if(isset($_GET['url'])){
    
    switch($_GET['url']){
            
        case "accueil" :            
            $content="";
            break;
            
        case "utilisateurs":
            $user = new App\UtilisateurManager();
            $content = $user->lister();
            $content = $user->afficherListeUser($content);
            $vue= "template/vues/VueUtilisateur.php";
            break;
            
            
        default:   
        header('Location: accueil');
       
}
}else{
   header('Location: accueil'); 
    
}


/*
*debut
*utilisation de kint pour debuger l'appli
*
*/

Kint::dump($GLOBALS, $_SERVER); // pass any number of parameters
d($GLOBALS, $_SERVER); // or simply use d() as a shorthand

Kint::trace(); // Debug backtrace
d(1); // Debug backtrace shorthand

//s($GLOBALS); // remplace le print_r avec la balise <pre> 

//~d($GLOBALS); // Text only output mode

Kint::$enabled_mode = false; // Disable kint
d('Get off my lawn!'); // Debugs no longer have any effect



?>








