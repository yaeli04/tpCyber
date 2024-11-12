<?php

$action = filter_input(INPUT_GET, 'action');
require_once 'include/class.pdo.inc.php';

switch ($action) {
    case 'get_clients':
        $listClients= $pdo->clients();
        include 'vues/v_clients.php';
        break; 

    case 'supprimer':
        $id = $_GET['id'];
        $pdo->supClients($id);
        echo ' le client a bien été supprimé';
        header("Refresh:1;URL=index.php?uc=acceuil");
        break;       
    }
    
?>