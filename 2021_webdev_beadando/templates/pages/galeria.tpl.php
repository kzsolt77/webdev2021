
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

<div class="container">
    <h3>Feltöltés a galériába:</h3>
<?php
    if (!empty($uzenet))
    {
        echo '<ul>';
        foreach($uzenet as $u)
            echo "<li>$u</li>";
        echo '</ul>';
    }
?>
</div>
<div class="row">
    <div class="col-md 4">
    </div>
    <div class="col-md 4">
    <form action="feltolt.php" method="post" enctype="multipart/form-data">
        <fieldset>
        <label>Első:</label>
        <input type="file" name="elso" required>
        <br>
        <label>Második: </label>
        <input type="file" name="masodik">
        <br>
        <label>Harmadik:</label> 
        <input type="file" name="harmadik">
        <br>
        <input type="submit" name="kuld">
        </fieldset>
    </form>  
    </div>
    <div class="col-md 4">
    </div>
</div>
      