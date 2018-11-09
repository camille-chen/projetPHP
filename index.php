<?php include_once("layout/header.php");?>
<?php include_once("php/get_event.php");?>

<div class="container button-menu" id="form">
    <div class="btn-group">
    <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Liste des événements
    </button>
    <div class="dropdown-menu dropdown-menu-right">
    <?php if(!empty($events)) {?>
    <?php foreach($events as $event){ ?>
        <a href="./event.php?id=<?php echo $event['id'] ?>" class="list-group-item list-group-item-action" id='link_add'><?php echo $event['event_name'];?></a>
    <?php } ?>
    <?php } ?>
    </div>
    </div>
    <div class="btn-group">
    <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Mes événements 
    </button>
    <div class="dropdown-menu dropdown-menu-right">
    <?php include_once("php/get_event_user.php"); 
    if(!empty($events)) {?>
    <?php foreach($events as $event){ ?>
    <a href="./event.php?id=<?php echo $event['id'] ?>" class="list-group-item list-group-item-action" id='link_add'><?php echo $event['event_name'];?></a>
    <?php } ?>
    <?php } ?>
    </div>
    </div>
    <div class="list-group" id="button_add">
    <a href="./add_event.php" class="list-group-item list-group-item-action" id='link_add'>Ajouter un événement</a>
    </div><div class="btn-group">
</div>
<div class="container">
		<h1> mon calendrier</h1>
		
		<div id="calendar"></div>

		<script>
		$(function() {

  // page is now ready, initialize the calendar...

  $('#calendar').fullCalendar({
    // put your options and callbacks here
  })

});
		</script>	
<?php include_once("layout/footer.php"); ?>