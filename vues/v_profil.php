<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil</title>
    <link rel="stylesheet" href="styles.css">

</head>
<body>
    <div class="profil-form">
        <h1>Mes informations</h1>
    <form action="index.php?uc=profil&action=modif_user" method="POST"> 
        <div>
            <label>Nom:</label>
            <input type="text" id="nom" name="nom" value="<?php echo $_SESSION['nom_client'] ?>"required>
        </div>
        <div>
            <label>Prénom :</label>
            <input type="text" id="prenom" name="prenom" value="<?php echo $_SESSION['prenom_client'] ?>" required>
        </div>
        <div>
            <label>Email :</label>
            <input type="email" id="email" name="email" value="<?php echo $_SESSION['mail_client'] ?>" required>
        </div>
        <div>
            <label>Role :</label>
            <?php echo $_SESSION['role_client'] ?>
        </div>
        <div>
            <button type="submit" class="btn btn-primary">Modifier mes informations</button>
        </div>
    </form>
</body>

</html>