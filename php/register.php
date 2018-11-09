<?php
//connexion à la base de donnée
require_once("db.php");
session_start();

//Je vérifie les données
if(isset($_POST['forminscription']))
{
	if(!empty($_POST['username'])AND !empty($_POST['email'])AND !empty($_POST['passe'])AND !empty($_POST['passe2'])AND!empty($_POST['firstname'])AND !empty($_POST['lastname'])AND !empty($_POST['age']))
	{
		echo "ok";
	}
}
else{
		$_SESSION['erreur']="tout les champs doivent être completés!";
	}
//je cherche à instaurer quelques sécurités
$firstname=htmlspecialchars($_POST['first_name']);
$lastname=htmlspecialchars($_POST['last_name']);
$age=htmlspecialchars($_POST['age']);
$username=htmlspecialchars($_POST['username']);
$email=htmlspecialchars($_POST['email']);
$passe=$_POST['passe'];
$passe2=$_POST['passe2'];

//on va crypter notre mots passe aux cas si on s'introduit dans notre BDD 
$passe=sha1($_POST['passe']);
$passe2=sha1($_POST['passe2']);

//test si tels respecte le nombre de caratères donner
$usernamelength=strlen($username);
if($usernamelength<=255)
{
	if($passe === $passe2)
	{

	}
	else
	{
		$_SESSION['erreur']="les deux mots de passe ne correspondent pas";
	}
}			
else
{
	$_SESSION['erreur']="tous les champs doivent respecter le nombre de caractère donner";
}

	if(filter_var($email,FILTER_VALIDATE_EMAIL))
	{

	}
	else
	{
	$_SESSION['erreur']="votre email n'est pas valide";
	}




if(empty($_SESSION['erreur'])){
	$sql='insert into users(first_name,last_name,username,email,password,date_created,age) 
			values(:first_name,:last_name,:username,:email,:password,NOW(),:age)';
	$stmt=$conn->prepare($sql);
	$stmt->bindValue(":first_name",$firstname);
	$stmt->bindValue(":last_name",$lastname);
	$stmt->bindValue(":username",$username);
	$stmt->bindValue(":email",$email);
	$stmt->bindValue(":password",$passe);
	
	$stmt->bindValue(":age",$age);

	$stmt->execute();

	$_SESSION['id'] = $conn->lastInsertId();

	header('Location:../');


}else{
	header('Location:../register.php');
}
?>