
<?php
    // adatok összegyűjtése:    
    $kepek = array();
    $olvaso = opendir($MAPPA);
    while (($fajl = readdir($olvaso)) !== false)
        if (is_file($MAPPA.$fajl)) {
            $vege = strtolower(substr($fajl, strlen($fajl)-4));
            if (in_array($vege, $TIPUSOK))
                $kepek[$fajl] = filemtime($MAPPA.$fajl);            
        }
    closedir($olvaso);
    // Megjelenítés logika:
?>
<div class="container">
    <h3>Galéria</h3>
    <div class="lightbox">
        <div class="row" id="galeria">
            
        <?php
        arsort($kepek);
        foreach($kepek as $fajl => $datum)
        {
        ?>
            <div class="col-md-6">
            <a href="<?php echo $MAPPA.$fajl ?>">
            <img src="<?php echo $MAPPA.$fajl ?>" class="w-100 shadow-strong rounded"></a>            
            <p>Név:  <?php echo $fajl; ?></p>
            <p>Dátum:  <?php echo date($DATUMFORMA, $datum); ?></p>
            </div>
        <?php
        }
        ?>
        </div>
    </div>
</div>

</div>
<div class="row container">
    <div class="col-md 4">
    </div>
        <div class="col-md 4">
        <h3>Feltöltés a galériába:</h3>
            <form action="feltolt.php" method="post" enctype="multipart/form-data">
                <fieldset>
                <label>Első:</label>
                <input type="file" name="elso" required>
                <br>
                <br>
                <label>Második: </label>
                <input type="file" name="masodik">
                <br>
                <br>
                <label>Harmadik:</label> 
                <input type="file" name="harmadik">
                <br>
                <br>
                <?php if(isset($_SESSION['login'])) { ?><input type="submit" name="kuld"><?php } ?>    
                </fieldset>
            </form>  
        </div>
    <div class="col-md 4">
    </div>
</div>
      