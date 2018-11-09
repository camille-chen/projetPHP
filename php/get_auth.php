<?php
    require("db.php");
    $id=$_GET['id'];
    //requête permettant de séléctionner l'id de la ligne correspondant à l'id de session

    $sql = "SELECT first_name, last_name, username, email, date_created, age
            FROM users
            WHERE id = :id";

$stmt=$conn->prepare($sql);
$stmt->bindValue(":id",$id);
$stmt->execute();
$data=$stmt->fetch();
