<?php
    include('modTache.php');
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Modifier une tache</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
        <hr class="bord">
        <hr id="bord2">
    <div id="body">

        <div class="heading">
            <h1>Modifier une tache</h1>
        </div>
                
        <form action="pageModif.php" method="POST">            
            <input type="hidden" name="id" class="taskInput" value="<?php echo $id ?>">
            <input type="text" name="task" class="taskInput" value="<?php echo $task ?>">
            <button type="submit" class="modBtn" name="update">Modifier la tache</button>
        </form>

        <form action="todolist.php">
             <button type="submit" class="addBtnIndex">Retour à la liste de tache</button>
        </form>

    </div>
        <hr class="bordbas">
</body>
</html>
