<?php 
 require("db.php");
 session_start();
 unset($_SESSION['erreur']);

 $eventname = htmlspecialchars($_POST['event_name']);
 $place = htmlspecialchars($_POST['place']);
 $date = htmlspecialchars($_POST['date']);
 $description = htmlspecialchars($_POST['description']);
 $id=$_SESSION['id'];


if(isset($_POST['add']))
{

    if(empty($eventname) OR empty($place) OR empty($date) OR empty($description))
    {
        $erreur = "Tous les champs doivent être saisis !";
        $_SESSION['erreur'] = $erreur;
        header("Location: ../add_event.php");
    }
    
}

if(empty($_SESSION['erreur']))
{

    $sql = "INSERT INTO events (event_name, place, event_date, event_description, date_created, user_id)
    VALUES (:event_name, :place, :date, :description, NOW(), :id)";

    $stmt=$conn->prepare($sql);
    $stmt->bindValue(":event_name",$eventname);
    $stmt->bindValue(":place",$place);
    $stmt->bindValue(":date",$date);
    $stmt->bindValue(":description",$description);
    $stmt->bindValue(":id",$id);
    $stmt->execute();
    header("Location: ../index.php");
}
else
{
	header('Location:../add_event.php');
}
