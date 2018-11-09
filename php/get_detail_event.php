<?php 
        require_once("db.php");
        $SessionId = 

        $sql = "SELECT *
                FROM events
                WHERE id = :id";
            
    $stmt=$conn->prepare($sql);
    $stmt->bindValue('id', $_GET['id']); //faire correspondre l'id de l'event avec l'id de l'url
    $stmt->execute();
    $events=$stmt->fetch();