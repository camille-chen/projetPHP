<?php
    require("db.php");
    session_start();
    $id=$_SESSION['id'];

    $sql = "SELECT first_name, last_name, username, email, date_created, age
            FROM users
            WHERE id = :id";

$stmt=$conn->prepare($sql);
$stmt->bindValue(":id",$id);
$stmt->execute();
$data=$stmt->fetch();
