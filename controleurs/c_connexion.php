<?php
include 'vues/v_connexion.php';
$action = filter_input(INPUT_GET, 'action');
require_once 'include/ftc.inc.php'; //permet d'acceder au contenu du fichier ftc class="inc ph"
require_once 'include/class.pdo.inc.php';


switch ($action) {
    case 'login':
        $email= htmlspecialchars(trim($_POST['mail']));
        $mdp= htmlspecialchars(trim($_POST['mdp']));
        $info_client= $pdo->login($email);
        if($info_client){
            $mdpHash=$info_client['mdp'];
          
            if(password_verify($mdp, $mdpHash)){
                $_SESSION['nom_client']= $info_client['nom'];
                $_SESSION['prenom_client']= $info_client['prenom'];
                $_SESSION['mail_client']= $info_client['mail'];
                $_SESSION['id_client']= $info_client['id'];
                $_SESSION['role_client']= $info_client['role'];

                echo 'Connecté avec succès';
                header("Refresh:1;URL=index.php?uc=acceuil");
                //ds ce cas rediriger le client vers le menu
                
                exit();

            }else{
                echo ' mot de passe invalide';
            }

            
        break;
    

        }
            
    }             
        
        
?>