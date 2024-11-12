<?php


function verifMdp($mdp){
    $return='true';
    if(strlen($mdp) < 12){
        $return= 'le mot de passe doit contenir au moins 12 caracteres';
    }
    if(!preg_match('/[a-z]/',$mdp)){ //! -> le contraire
        $return= 'le mot de passe doit contenir un caractere miniscule';
    }
    if(!preg_match('/[A-Z]/',$mdp)){ //! -> le contraire
        $return= 'le mot de passe doit contenir un caractere majuscule';
    }
    if(!preg_match('/[0-9]/',$mdp)){ //! -> le contraire
        $return= 'le mot de passe doit contenir un chiffre';
    }
    if(!preg_match('/[\W]/',$mdp)){ //! -> le contraire
        $return= 'le mot de passe doit contenir un caractere special';
    }
    return $return;
}
?>