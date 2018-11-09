<?php 
        require_once("db.php");
    
        $sql = "SELECT *
                FROM events
                WHERE user_id = :id";
            
    $stmt=$conn->prepare($sql);
    $stmt->bindValue(":id",$_SESSION['id']);
    $stmt->execute();
    $events=$stmt->fetchAll();
