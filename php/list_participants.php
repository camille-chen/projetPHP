<?php
require_once("db.php");
$idEvent = $_GET["id"]; //pour récupérer le paramètre id dans l'url
 
//lancement de requête pour l'effacement de l'évènement 
$sql= 'SELECT user_id, username
       FROM participants p
       JOIN users u
       ON u.id = p.user_id
       WHERE event_id = :event_id';

        	$stmt=$conn->prepare($sql);
        	$stmt->bindValue(":event_id",$idEvent);
            $stmt->execute();
            $participants=$stmt->fetchAll();
?>