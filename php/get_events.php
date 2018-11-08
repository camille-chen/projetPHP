<?php 
        require("db.php");
        session_start();
        $id=$_SESSION['id'];
    
        $sql = "SELECT event_name, place, event_date, event_description, date_created
                FROM events e";
            
          
    
    $stmt=$conn->prepare($sql);
    $stmt->bindValue(":id",$id);
    $stmt->execute();
    $data=$stmt->fetch();

