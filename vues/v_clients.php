<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clients</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="containerAbsente">
        <table class="table table-bordered table-responsive">
            <thead>
                <tr>
                <th >Nom</th>
                <th>Prénom</th>
                <th>Supprimer</th>
    </div></th>
                </tr>
            </thead>
            <tbody>
    <?php foreach ($listClients as $client) {  
                ?>           
            <tr>
            <td class="tdUpdate">        
            <?php echo $client['nom'] ?>
            </td>
            <td class="tdUpdate">
            <?php echo $client['prenom'] ?>
            </td>
            <td class="tdUpdate">
            <a href="index.php?uc=clients&action=supprimer&id=<?php echo $client['id'] ?>" class="btnUpdate">Supprimer</a>
                        </td>
                    </tr>

          <?php } ?>
        </tbody>
            </table>
            
            <a href="index.php?uc=accueil" type="submit" class="btn btn-primary">Terminer
            </a>
    </div>
        
</body>
</html>

