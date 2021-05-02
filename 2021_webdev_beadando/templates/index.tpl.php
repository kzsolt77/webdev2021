<?php session_start(); ?>
<?php if(file_exists('./logicals/'.$keres['fajl'].'.php')) { include("./logicals/{$keres['fajl']}.php"); } ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?= $ablakcim['cim'] . ( (isset($ablakcim['mottó'])) ? ('|' . $ablakcim['mottó']) : '' ) ?></title>
	<link rel="stylesheet" href="./styles/stilus.css" type="text/css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
	<?php if(file_exists('./styles/'.$keres['fajl'].'.css')) { ?><link rel="stylesheet" href="./styles/<?= $keres['fajl']?>.css" type="text/css"><?php } ?>
</head>

<body class="d-flex flex-column h-100">
	
	<nav class="py-2 bg_light border-bottom">
		<div class="container d-flex flex-wrap">
			<ul class="nav me-auto">
				<?php foreach ($oldalak as $url => $oldal) { ?>
					<?php if(! isset($_SESSION['login']) && $oldal['menun'][0] || isset($_SESSION['login']) && $oldal['menun'][1]) { ?>
						<li<?= (($oldal == $keres) ? ' class="nav-item"' : ' class="nav-item"') ?>>
						<a href="<?= ($url == '/') ? '.' : ('?oldal=' . $url) ?>" (($oldal == $keres) ? ' class="nav-link link-dark px-2 active"' : ' class="nav-link link-dark px-2"')>
						<?= $oldal['szoveg']  ?></a>
						</li>
					<?php } ?>
				<?php } ?>
			</ul>
		</div>
			
	</nav>
	
	<header class="container">
		<h1><?= $fejlec['cim'] ?></h1>
		<?php if (isset($fejlec['motto'])) { ?><h2><?= $fejlec['motto'] ?></h2><?php } ?>
		<?php if(isset($_SESSION['login'])) { ?>Bejelentkezve: <strong><?= $_SESSION['csn']." ".$_SESSION['un']." (".$_SESSION['login'].")" ?></strong><?php } ?>
	</header>
	
	<div class="container d-flex flex-wrap" id="content">
            <?php include("./templates/pages/{$keres['fajl']}.tpl.php"); ?>
    </div>
	
    <footer class="footer mt-auto py-3 bg-light">
		<div class="container">
		<?php if(isset($lablec['ceg'])) { ?><?= $lablec['ceg']; ?><?php } ?>
        &nbsp;
		<?php if(isset($lablec['copyright'])) { ?>&copy;&nbsp;<?= $lablec['copyright'] ?> <?php } ?>
		</div>
    </footer>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>
</html>
