<?php
    if( (empty($_POST['login'])==true) || (empty($_POST['mdp'])==true)){
        header('location:index.php');
    }else{
        $login = $_POST['login'];
        $mdp = $_POST['mdp'];

        if(($login == 'todoNamo') && ($mdp == 'namo')){
            header('location:todolist.php');
        }else{
            header('location:index.php');
        }
    }

?>