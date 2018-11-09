<?php include_once("layout/header.php");?>
<?php include_once("php/update_event.php");?>

<div  class="container" id="form">
    <h1> Ajouter un événement </h1>
    <form action="php/update_event.php" method="POST">
                    <div class="form-group">
                        <label for="event_name">Nom de événement</label>
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
                     <input type="submit" value="Ajouter" class="btn btn-primary" name="add">
                     </div>
    </form>
</div>