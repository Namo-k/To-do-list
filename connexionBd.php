<?php
//connexion a la bd
    $login="root";
    $mdp=""; //à completer
    $serveur="localhost";
    $bd="todo";
    $connexion=mysqli_connect($serveur, $login, $mdp, $bd);
    mysqli_set_charset($connexion, 'utf8');
?>
