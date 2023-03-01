<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Liste de taches</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
        <hr class="bord">
        <hr id="bord2">
    <div id="body">
        <div class="heading">
            <h1>Se connecter</h1>
        </div>
        
        
        <form action="verifLogin.php" method="POST" class="formIndex"><br>
            <label for="login" class="labelId">Nom d'utilisateur</label><input type="text" name="login" class="taskInputId" id="login" placeholder="Identifiant"><br><br>
            <label for="mdp" class="labelId">Mot de passe</label><input type="password" name="mdp" class="taskInputId" id="mdp" placeholder="Mot de passe"><br><br>
            <button type="submit" class="addBtnIndex">Se connecter</button>
        </form>

    </div>
    <hr class="bordbas">
</body>
</html>