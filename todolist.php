<?php
    //  include('ajoutTache.php');
     include('connexionBd.php');
     include('order.php');
     include('supTache.php');
     include('afficheTache.php');
?>
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
            <h1>Taches a faire</h1>
        </div>
        
        
        <form action="pageAjout.php" method="POST" class="formIndex">
            <button type="submit" class="addBtnIndex">Ajouter une tache</button>
        </form>

        <table>
            <thead>
                
                    <th colspan="2">Ordre</th>
                    <th>Tache à effectuer</th>
                    <th colspan="2">Action</th>
                    <th> Action</th>
                
            </thead>
            <tbody>

                    <?php $i = 1; while($element = mysqli_fetch_assoc($tasks)){ ?>
                            <tr>
                                <td class="num"><?php echo $i;?></td>
                                <td class="btnOrdre"><a href="todolist.php?order=plus&i=<?php echo $i ?>&num_task=<?php echo $element ['num'];?>&id_task=<?php echo $element ['id'];?>">⇧</a><a href="todolist.php?order=minus&i=<?php echo $i ?>&num_task=<?php echo $element ['num'];?>&id_task=<?php echo $element ['id'];?>"">⇩</a></td>
                                <td class="task"><?php echo $element ['task']?></td>
                                <td class="delete"><a href="todolist.php?del_task=<?php echo $element ['id'];?>">🗸</a></td>
                                <td class="modify"><a class="modify" href="pageModif.php?id_task=<?php echo $element ['id'];?>">✏️</a></td>
                                <td class="action">
                                    <div class="menu">
                                        <span style="--i:0;--x:2;--y:-1"><ion-icon name="camera-outline"></ion-icon></span>
                                        <span style="--i:1;--x:2;--y:1"><ion-icon name="bar-chart-outline"></ion-icon></span>
                                    </div>
                                    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
                                    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
                                    <script>
                                        let menu = document.querySelector('.menu');
                                        menu.onclick = function(){
                                            menu.classList.toggle('clicked')
                                        }
                                    </script>
                                </td>
                            </tr>
                    <?php $i++;} ?>

                    
            <tbody>
        </table>
    </div>
    <hr class="bordbas">
</body>
</html>