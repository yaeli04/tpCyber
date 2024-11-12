<?php
require_once 'includes/ftc.inc.php';

function testVerifMdp() {
    // tableau=test contien valeur mdp et son code erreur
    $test = [
        "aaaaaaaaaa1?" => 'le mot de passe doit contenir un caractere majuscule',
        "AAAAAAAAAA1?" => 'le mot de passe doit contenir un caractere miniscule',
        "Aaaaaaaaaaa?" => 'le mot de passe doit contenir un chiffre',
        "Aaaaaaaaaa1a" => 'le mot de passe doit contenir un caractere special' ,
        "Aaaaaaaa1?" => 'le mot de passe doit contenir au moins 12 caracteres',
        "Aaaaaaaaaa1?" => 'true',
    ];
    foreach($test as $mdp => $message){
        $resultat = verifMdp($mdp);
        if ($resultat == $message){
            echo "<br> test successful $mdp";
        }else{
            echo "test failed";
        }


    }
    
}
    
 
?>



