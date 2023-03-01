<?php
//order
     if(isset($_GET['order'])){
         $oId = $_GET['id_task'];
         $order = $_GET['order'];
         $orderNum = $_GET['num_task'];
         if ($order == "plus") {
             if ($orderNum == 1) {
                $orderNum = 1;
             }else{
                $orderNum = $orderNum-1;
             }
         }
         if ($order == "minus"){
                $orderNum = $orderNum+1;
         }
         $req = "UPDATE tasks SET num=$orderNum WHERE id=$oId";
         $update=mysqli_query($connexion, $req);
         header('location: todolist.php');
     }
?>