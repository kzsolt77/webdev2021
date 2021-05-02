<!DOCTYPE hmtl>

<?php
if(isset($_POST['szoveg']) && isset($_POST['nev']) && isset($_POST['email'])) {
    try {
        // Kapcsolódás
        $dbh = new PDO('mysql:host=localhost;dbname=labor7', 'root', '',
                        array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
        $dbh->query('SET NAMES utf8 COLLATE utf8_hungarian_ci');
        
       // Ha nem létezik, akkor regisztráljuk
       $sqlInsert = "insert into bejegyzesek(szoveg, nev, email)
       values(:szoveg, :nev, :email)";
        
       $stmt = $dbh->prepare($sqlInsert); 
       $nev = $_POST['nev'];
       $szoveg = $_POST['szoveg'];
       $email = $_POST['email'];
       

       $stmt->execute(array(':szoveg' => $szoveg, ':nev' => $nev,
              ':email' => $email)); 
        ?>
        <div class="container">
        <h3>Ön a következő véleményt küldte el:</h3>
        <p>Név: <bold><?php echo $nev?></bold><br>
        Email: <bold><?php echo $email?></bold><br>
        Vélemény: <bold><?php echo $szoveg?></bold>
        </p>
        </div>
        <?php
        
    }
    catch (PDOException $e) {
        $errormessage = "Hiba: ".$e->getMessage();
    }      
}
else {
    
    header("Location: .");
}
?>