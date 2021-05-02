<?php
$ablakcim = array(
    'cim' => 'Regram',
);

$fejlec = array(
    'kepforras' => 'regram_logo.bmp',
    'kepalt' => 'logo',
	'cim' => 'Regram',
	'motto' => 'Számítástechnikai Kft.'
);

$lablec = array(
    'copyright' => 'Copyright '.date("Y").'.',
    'ceg' => 'Regram Kft.'
);

$oldalak = array(
	'/' => array('fajl' => 'cimlap', 'szoveg' => 'Címlap', 'menun' => array(1,1)),
	'velemeny' => array('fajl' => 'velemeny', 'szoveg' => 'Mondja el Ön is!', 'menun' => array(1,1)),
	'kapcsolat' => array('fajl' => 'kapcsolat', 'szoveg' => 'Kapcsolat', 'menun' => array(1,1)),
    'galeria' => array('fajl' => 'galeria', 'szoveg' => 'Galéria', 'menun' => array(1,1)),
	'bejegyzes' => array('fajl' => 'bejegyzes', 'szoveg' => 'Bejegyzés', 'menun' => array(0,1)),
    'velemenyek' => array('fajl' => 'velemenyek', 'szoveg' => 'Vélemények', 'menun' => array(1,1)),
    'belepes' => array('fajl' => 'belepes', 'szoveg' => 'Belépés', 'menun' => array(1,0)),
    'kilepes' => array('fajl' => 'kilepes', 'szoveg' => 'Kilépés', 'menun' => array(0,1)),
    'belep' => array('fajl' => 'belep', 'szoveg' => '', 'menun' => array(0,0)),
    'regisztral' => array('fajl' => 'regisztral', 'szoveg' => '', 'menun' => array(0,0)),
    'velemenybekuld' => array('fajl' => 'velemenybekuld', 'szoveg' => '', 'menun' => array(0,0))
);

$hiba_oldal = array ('fajl' => '404', 'szoveg' => 'A keresett oldal nem található!');
?>
<?php
    
    $TIPUSOK = array ('.jpg', '.png');
    $MEDIATIPUSOK = array('image/jpeg', 'image/png');
    $DATUMFORMA = "Y.m.d. H:i";
    $MAPPA = './kepek/';
    
?>