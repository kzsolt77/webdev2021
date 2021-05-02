<div class="container">
    <form id="hozzaszolas" action="?oldal=velemenybekuld" method="post">
    <fieldset>
        <legend>Vélemény</legend>
        <textarea id="szoveg"  name="szoveg" placeholder="(kötelező, minimum 10 betű)" rows="4" cols="50" required></textarea><br><br>
        
        <legend>Név</legend>
        <input type="text" id="nev" name="nev"  size="50" value="" placeholder="(kötelező, minimum 3 betű)" required><br><br>
    
    
        <legend>Emailcím</legend>
        <input id="email" name="email" type="text" size="50" value="" placeholder="email" required><br><br>
        <p>(Az e-mail cím megadása kötelező.<br>Megjelenik az oldalon, de nem lesz kiszolgáltatva a spam robotok számára.)</p>
        
        <button name="hozzaszolaskuld" id="hozzaszolaskuld" type="submit" value="kuld">Küldés</button>
    </fieldset>
    </form>
</div>

