<?php include_once("layout/header.php");?>
<?php include_once("php/get_detail_event.php");?>

<div class="container event" id="form">
<h1><?php echo $events['event_name'];?> </h1>
<p class="soustitre">Lieu <p><?php echo $events['place'];?></p></p>
<p class="soustitre">Date de l'événement <p><?php echo $events['event_date'];?></p></p>
<p class="soustitre">Description <p><?php echo $events['event_description'];?> </p></p>
<p class="soustitre">Date de création : <p><?php echo $events['date_created'];?></p></p>

<?php 
if(!empty($_SESSION['id'])){
    include_once("php/verify_participation.php");
if($_SESSION['id'] == $events['user_id']) {?> 

<button class="btn btn-primary button"><a href="php/delete_event.php?id=<?php echo $events['id']?>">Supprimer</a></button>
<button class="btn btn-primary button"><a href="./update_event.php">Modifier</a></button>
<?php }
if($participe == 0) {?>
<button class="btn btn-primary button"><a href="php/add_participation.php?id=<?php echo $events['id']?>">Participer</a></button>
<?php }else{ ?>
<button class="btn btn-primary button"><a href="php/cancel_participation.php?id=<?php echo $events['id']?>">Annuler la participation</a></button>
    <?php } 
}?>

<ul class="list-group" id="list">
    <li class="list-group-item">Liste des participants</li>
    <?php include_once('php/list_participants.php');
    foreach($participants as $participant){
       ?>
    <li class="list-group-item"><a href='profil.php?id=<?php echo $participant['user_id'] ?>'><?php echo $participant['username']?> </a></li>
    <?php } ?>
</ul>
</div>


<?php include_once("layout/footer.php")?>


