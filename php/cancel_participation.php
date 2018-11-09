<?php
require("db.php");
session_start();
$idEvent = $_GET["id"]; //pour récupérer le paramètre id dans l'url
 
//lancement de requête pour l'effacement de l'évènement 
$sql= 'DELETE FROM participants
       WHERE user_id = :user_id
       AND event_id = :event_id ';

        	$stmt=$conn->prepare($sql);
        	$stmt->bindValue(":user_id",$_SESSION['id']);
        	$stmt->bindValue(":event_id",$idEvent);
            $stmt->execute();
            
            header('Location:../event.php?id='.$idEvent);
?>