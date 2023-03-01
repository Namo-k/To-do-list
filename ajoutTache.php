<?php
    $errors = "";
    include('connexionBd.php');

    if (isset($_POST['submit'])) {
        $task = $_POST['task'];

        $req = "SELECT * FROM tasks ORDER BY id DESC";
        $tasks=mysqli_query($connexion, $req);
        $num = mysqli_fetch_assoc($tasks)['num'];

        if (empty($task)) {
            $errors = "Vous devez écrire une tache à completer!";
        }else{
            $num += 1;
            $req = "INSERT INTO tasks (num,task) VALUES ('$num','$task')";
            $resultat=mysqli_query($connexion, $req);
            header('location: todolist.php');
        }       
    }
 
?>