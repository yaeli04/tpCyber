<?php
//include 'vues/v_inscription.php';
//include 'vues/v_connexion.php';
require_once 'include/class.pdo.inc.php';
//require_once 'tests/ftc_tests.php';
$pdo= PdoGsb::getPDOGsb();
//testVerifMdp();

session_start();

//une variable est tjs precede du $
$uc=filter_input(INPUT_GET,'uc'); //filtre le lien

if (empty($uc)){
    $uc='connexion'; //si uc est vide (le cas qd je lance le projet) empty=vide
}
switch ($uc){//les differentes valeurs que peut avoir $uc
    case 'inscription':
        include 'controleurs/c_inscription.php';//redirige l'utilisateur vers le controleur inscription
        break;

    case 'connexion': 
        include 'controleurs/c_connexion.php';
        break;    
    case 'acceuil':
        include 'controleurs/c_acceuil.php';
        break;  

    case 'profil': 
        include 'controleurs/c_profil.php';
        break;
    
    case 'message': 
        include 'controleurs/c_message.php';
        break;
        
    case 'recherche': 
        include 'controleurs/c_recherche.php';
        break;
        
    case 'clients': 
        include 'controleurs/c_clients.php';
        break;    
}
?>
