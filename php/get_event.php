<?php 
        require_once("db.php");

        $sql = "SELECT *
                FROM events";
            
    $stmt=$conn->prepare($sql);
    $stmt->execute();
    $events=$stmt->fetchAll();

      
