<?php

$action = filter_input(INPUT_GET, 'action');
require_once 'include/ftc.inc.php'; //permet d'acceder au contenu du fichier ftc class="inc ph"
require_once 'include/class.pdo.inc.php';
include 'vues/v_profil.php'; 

switch ($action) {
    case 'modif_user':
        if($_SERVER['REQUEST_METHOD']=='POST'){
            $nom = htmlspecialchars(trim($_POST['nom']));
            //methode non securise pour recuperer la saisi utilisateur: $nom=$_POST['nom'];
            //htmlspecialchars c'est une fonction qui permet de utter contre les attaques XSS.
            //Cette fonction va convertir la valeur du champs saisi en chaine de caractere.
            $prenom= htmlspecialchars(trim($_POST['prenom']));
            $email= htmlspecialchars(trim($_POST['email']));
            $id= $_SESSION['id_client'];
            $pdo->modifInfo($nom, $prenom, $email, $id);
            $_SESSION['nom_client']= $nom;
            $_SESSION['prenom_client']= $prenom;
            $_SESSION['mail_client']= $email;
    }else{
        echo "Methode non autorisée";
        }
        break;
}     
?>
 