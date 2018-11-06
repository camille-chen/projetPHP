<?php include_once("layout/header.php"); ?>
<?php include_once("php/get_auth.php"); ?>


<div  class="container" id="form">
        <img src="img/profil_defaut.png">
            <div id="profil">
                <h2><?php echo $data['first_name'];?> <?php echo $data['last_name'];?></h2>
                <p class="text"><?php echo $data['age'];
                    ?><p>
                <p class="text"><?php echo $data['username'];
                    ?><p>
                <p class="text"><?php echo $data['email'];
                    ?><p>
                <p class="text"><?php echo $data['date_created'];
                    ?><p>
            </div>
        </div>
</div>