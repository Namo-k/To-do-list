<?php
    
//delete task
     if(isset($_GET['del_task'])){
         $id = $_GET['del_task'];
         $req = "DELETE FROM tasks WHERE id=$id";
         $delete=mysqli_query($connexion, $req);
         header('location: todolist.php');
     }
?>