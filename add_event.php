<?php include_once("layout/header.php");
session_start(); ?>

<div  class="container" id="form">
    <form action="php/add_event.php" method="POST">
                    <div class="form-group">
                        <label for="event_name">Nom événement</label>
                        <input type="text" class="form-control" name="event_name" placeholder="Entrer le nom de l'événement">
                    </div>
            
                    <div class="form-group">
                        <label for="place">Lieu</label>
                        <input type="text" class="form-control" name="place" placeholder="Lieu de l'événement">
                    </div>

                    <div class="form-group">
                        <label for="date">Date de l'événement</label>
                        <input type="date" class="form-control" name="date" placeholder="Date de l'événement">
                    </div>

                    <div class="form-group">
                        <label for="description">Description</label>
                        <input type="text" class="form-control" name="description" placeholder="Description de l'événement">
                    </div>
                    <div class="erreur"><?php if(!empty($_SESSION['erreur']))
                                                    {
                                                    echo $_SESSION['erreur'];
                                                    unset($_SESSION['erreur']);
                                                    }
                                                    ?>
                    </div>
                     <input type="submit" value="ajouter" class="btn btn-primary" name="add">

                   <!-- <div class="form-group"> 
                        <label for="date">Date de l'événement</label>
                    </div>
                    -->
    </form>
</div>