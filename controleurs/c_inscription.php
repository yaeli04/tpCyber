<?php

$action = filter_input(INPUT_GET, 'action');
include'vues/v_inscription.php';
require_once 'include/ftc.inc.php'; //permet d'acceder au contenu du fichier ftc class="inc ph"
require_once'include/class.pdo.inc.php';
//$bddExiste = $pdo->BDD_Existe();

switch ($action) {
    case 'new_user':
        if($_SERVER['REQUEST_METHOD']=='POST'){
            $nom = htmlspecialchars(trim($_POST['nom']));
            //methode non securise pour recuperer la saisi utilisateur: $nom=$_POST['nom'];
            //htmlspecialchars c'est une fonction qui permet de utter contre les attaques XSS.
            //Cette fonction va convertir la valeur du champs saisi en chaine de caractere.
            $prenom= htmlspecialchars(trim($_POST['prenom']));
            $email= htmlspecialchars(trim($_POST['email']));
            $mdp= htmlspecialchars(trim($_POST['mdp']));
            
            if($pdo->verifMail($email)){
            echo 'Le mail est deja existant';
            }
            if(!verifMdp($mdp)){
                echo ' le mot de passe est incorrect';
            }else{
                $mdpHash= password_hash($mdp,PASSWORD_DEFAULT);
                $pdo ->enregistrerClient($nom,$prenom,$email,$mdpHash);
                header("Refresh:1;URL=index.php?uc=connexion");
            }
            }break;
        }
        
?>
