<?php
   include('connexionBd.php');
   //update task
   if (isset($_POST['update'])) {
        $id = $_POST['id'];
        $uptTask = $_POST['task'];
        $upt = "UPDATE `tasks` SET `task` = '$uptTask' WHERE `tasks`.`id` = $id";
        $resutat = mysqli_query($connexion, $upt);
        header('location: todolist.php');
    }

     if(isset($_GET['id_task'])){
        $id = $_GET['id_task'];
         
        $req = "SELECT * FROM tasks WHERE id=$id";
        $taskU = mysqli_query($connexion, $req);
    
            while($element = mysqli_fetch_assoc($taskU)){
                $task = $element ['task'];
            }
    }
?>