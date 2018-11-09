<?php 
include_once("layout/head.php"); 
session_start();
?>
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

    <h1>Nantes Events</h1>
    <h2>Connexion</h2>

    <div class="container">

        <form action="php/login.php" method="POST">
                    <div class="form-group">
                        <label for="Email">Email address</label>
                        <input type="email" class="form-control" name="email" aria-describedby="emailHelp" placeholder="Enter email">
                    </div>
            
                    <div class="form-group">
                        <label for="Password">Password</label>
                        <input type="password" class="form-control" name="password" placeholder="Password">
                    </div>
            
                        <div class="erreur"><?php if(!empty($_SESSION['erreur'])){
                                                    echo $_SESSION['erreur'];
                                                    unset($_SESSION['erreur']);
                        }
                                                    ?>
                        </div>
                        
                    <input type="submit" value="Connecter" class="btn btn-primary" name="connexion">
        </form>

    </div>

<?php include_once("layout/footer.php"); ?>