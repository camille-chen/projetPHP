<?php include_once("layout/head.php")?>

<header>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Nantes Event</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="register.php">Inscription</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="login.php">Connexion</a>
      </li>
    </ul>
  </div>
</nav>
</header>

	<div class="container">
	<div class="profil">
	<h1>Nantes Events</h1>
	<h2>Inscription</h2>
	</div>
	<form action="php/register.php" method="post">

		<div class="form-group">
			<label>Prénom</label> 
			<input type="text" class="form-control" name="first_name">
		</div>
		<div class="form-group">
			<label>Nom de famille</label> 
			<input type="text" class="form-control" name="last_name">
		</div>
		<div class="form-group">
			<label>Age</label> 
			<input type="text" class="form-control" name="age">
		</div>	
			<div class="form-group">
			<label>username</label> 
			<input type="text" class="form-control" name="username"/>
		</div>
		<div class="form-group">
			<label>Mot de passe</label> 
			<input type="password" class="form-control" name="passe"/>
		</div>
		<div class="form-group">
			<label>Confirmation du mot de passe</label> 
			<input type="password" class="form-control" name="passe2"/>
		</div>
		<div class="form-group">
			<label>Adresse e-mail </label>
			<input type="text" class="form-control" name="email"/>
		</div>
<div class ="form-group">
<input type="submit"  class="btn btn-primary" name="forminscription" value="Soumettre"/>
	</form>
<?php
if(isset($erreur))
{
	//rends le message d'erreur un peu plus évident, l'affiche d'une couleur rouge
	echo '<font color="red">',$erreur,"</font>";
}
?>
</div>
<?php include_once("layout/footer.php")?>