<?php
     $req = "SELECT * FROM tasks ORDER BY num ASC";
     $tasks=mysqli_query($connexion, $req);
?>