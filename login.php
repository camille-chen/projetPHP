<?php 
include_once("layout/head.php"); 
session_start();
?>

    <h1>CONNEXION</h1>

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