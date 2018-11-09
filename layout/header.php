<?php session_start(); ?>
<!DOCTYPE html>
<html lang="fr">
<head>
<?php require("head.php"); ?>
</head>
<body>

<header>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Nantes Event</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Accueil<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="profil.php?id=<?php echo $_SESSION["id"] ?>">Profil</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="php/logout.php">Déconnecter</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="debuger.php" data-toggle="collapse" role="button">Debuger</a>
      </li>
    </ul>
  </div>
</nav>

</header>