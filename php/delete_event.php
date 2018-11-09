<?php
//connexion BDD
require("db.php");
$idEvent = $_GET["id"]; //pour récupérer le paramètre id dans l'url
 
//lancement de requête pour l'effacement de l'évènement 
$sql= 'DELETE FROM events
        WHERE id = :id';

        	$stmt=$conn->prepare($sql);
        	$stmt->bindValue(":id",$idEvent);
            $stmt->execute();
            
            header("Location:../");
?>
