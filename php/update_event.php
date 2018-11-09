<?php
//connexion BDD
require_once("db.php");
unset($_SESSION['erreur']);

$idEvent = $_POST['id']; //pour le cacher de l'url , cache tout les paramètre tout ce qu'on envoie de l'url
$event_name =$_POST['event_name'];
$place =$_POST['place'];
$event_date =$_POST['date'];
$event_description =$_POST['description'];

 //on cherche à modifier les données envoyer sur la BDD

if (isset($_POST['modifier'])) {
	if (empty($eventname='') AND empty($place='') AND empty($date='') AND empty($description='')) {
		$erreur='affiche un message ';
		echo $erreur='échec de la modification';
		header("Location: ../add_event.php");
    }
}
//on procède à la modification de la requête

	$ql="UPDATE events
         SET  event_name=:event_name ,place=:place,event_date=:event_date,event_description=:event_description
         WHERE id=:id";


            $stmt=$conn->prepare($sql);
        	$stmt->bindValue(":id",$idEvent);
        	$stmt->bindValue(":event_name",$event_name);
        	$stmt->bindValue(":place",$place);
        	$stmt->bindValue(":event_date",$event_date);
        	$stmt->bindValue(":event_description",$event_description);
            $stmt->execute();
            
            header('Location:./event.php'); 