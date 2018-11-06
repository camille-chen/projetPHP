<?php 
require("db.php");
session_start();
unset($_SESSION['erreur']);


if(isset($_POST['connexion'])) //Si cette variable existe, on valide la condition
{
    $mailconnect = htmlspecialchars ($_POST['email']);
    $mdpconnect = sha1($_POST['password']);

    if(!empty($mailconnect) && !empty($mdpconnect)) //si les champs mail et mdp ne sont pas vides...
    {
        //vérifie que le mail et mdp correspondent bien au champ
        $requser = $conn->prepare("SELECT * FROM users WHERE email = ? AND password = ?"); 
        $requser->execute(array($mailconnect,$mdpconnect));
        $userexist = $requser->rowCount();
        if($userexist == 1) //si il existe un résultat correspondant au champ, il doit être égal à 1
        {
            $userinfo = $requser->fetch(); // récupérer les informations
            $_SESSION['id'] = $userinfo['id']; 
            $_SESSION['password'] = $userinfo['password'];
            $_SESSION['email'] = $userinfo['email'];
            header("Location: ../profil.php?id=".$_SESSION['id']); //si les informations correspondent, la connexion se fait et se redirige sur la page d'accueil
        }
        else
        {
            $erreur = "Mauvais mail ou mot de passe !";
            $_SESSION['erreur'] = $erreur;
            header("Location: ../login.php");
        }
    }
    else
    {
        $erreur = "Tous les champs doivent être saisis !";
        $_SESSION['erreur'] = $erreur;
        header("Location: ../login.php");
    }
}
if(!empty($_SESSION['erreur'])){
    header("Location: ../login.php");
}
else{
    header("Location: ../profil.php?id=".$_SESSION['id']);
}
unset($conn);