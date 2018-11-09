<?php
require("db.php");
session_start();
$idEvent = $_GET["id"]; //pour récupérer le paramètre id dans l'url
 
//ajouter l'id user et l'id event dans la table participant pour voir qui participe à quel événement
$sql= 'INSERT INTO participants(user_id, event_id)
        VALUES(:user_id, :event_id) ';

        	$stmt=$conn->prepare($sql);
        	$stmt->bindValue(":user_id",$_SESSION['id']);
        	$stmt->bindValue(":event_id",$idEvent);
            $stmt->execute();
            
            header('Location:../event.php?id='.$idEvent);

