<?php if(isset($row)) { ?>
    <?php if($row) { ?>
        <div class="container">
        <h4>Bejelentkezett:</h4>
        <br>
        <p>Azonosító: <strong><?= $row['id'] ?></strong><br><br>
        Név: <strong><?= $row['csaladi_nev']." ".$row['uto_nev'] ?></strong></p>
        </div>
        
    <?php } else { ?>
        <div class="container">
        <h4>A bejelentkezés nem sikerült!</h4>
        <br>
        <a href="?oldal=belepes" >Próbálja újra!</a>
        </div>
    <?php } ?>
<?php } ?>
<?php if(isset($errormessage)) { ?>
    <h2><?= $errormessage ?></h2>
<?php } ?>
