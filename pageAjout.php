<?php
     include('ajoutTache.php');
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Ajout des taches</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
        <hr class="bord">
        <hr id="bord2">
    <div id="body">
        <div class="heading">
            <h1>Ajouter une tache</h1>
        </div>
        
        
        <form action="pageAjout.php" method="POST">
            <?php if(isset($errors)) { ?>
                <p><?php echo $errors; ?></p>
            <?php } ?>
            
            <input type="text" name="task" class="taskInput" placeholder="Tache:">
            <button type="submit" class="addBtn" name="submit">Ajouter la tache</button>
        </form>

        <form action="todolist.php">
             <button type="submit" class="addBtnIndex">Retour à la liste de tache</button>
        </form>
    </div>
    <hr class="bordbas">
</body>
</html>