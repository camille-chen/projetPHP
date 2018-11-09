<?php
include_once("db.php");
$event_id = $_GET["id"];

    $sql = 'SELECT *
            FROM participants
            WHERE user_id = :user_id
            AND event_id = :event_id' ;

$stmt=$conn->prepare($sql);
$stmt->bindValue(":user_id",$_SESSION['id']);
$stmt->bindValue(":event_id",$event_id);
$stmt->execute();
$participe= $stmt->rowCount();

?>