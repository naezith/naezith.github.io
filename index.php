<!DOCTYPE html>
<html lang="en">
<head>
	<title>Remnants of Naezith</title>
	<link rel="stylesheet" type="text/css" href="styles.css">
	<link rel="icon" type="image/x-icon" href="_img/k.ico">
	<meta name="viewport" content="width=device-width">
	<meta charset="utf-8">
	<meta name="description" content="A fast-paced platformer which has the grappling hook in it's core!">
</head>

<?php
	$pgs = array(
	'home'=>'home.php',
	'gallery'=>'gallery.php',
	'contact'=>'contact.php',
	'presskit'=>'presskit.php',
	);
	$s = (!empty($_GET['id']))?$_GET['id']:'home'; 
?>

<body>
	<div id="banner"></div>

	<header>
		<a href="."><img src="_img/title.png" alt="Remnants of Naezith"></a>
		<span class="po"></span>
	</header>

	<div id="wrap">
		<nav>
			<div>
				<?php if ($s == "home") echo '<span class="home">home</span>'."\n"; else echo '<a class="home" href=".">home</a>'."\n";?>
				<a href="https://forums.tigsource.com/index.php?topic=50838.0" target="_blank"><img src="_img/d.png" alt="">devlog</a>
				<a href="https://twitter.com/naezith" target="_blank" ><img src="_img/t.png" alt="">twitter</a>
				<a href="http://facebook.com/naezith" target="_blank"><img src="_img/f.png" alt="">facebook</a>
			</div>
			<div>
				<a href="https://soundcloud.com/pronomicalartist/sets/remnants-of-naezith" target="_blank"><img src="_img/s.png" alt="">soundcloud</a>
				<a href="https://www.reddit.com/r/naezith" target="_blank"><img src="_img/r.png" alt="">reddit</a>
				<?php if ($s == "gallery") echo '<span class="page">gallery</span>'."\n"; else echo '<a class="page" href="?id=gallery">gallery</a>'."\n";?>
				<?php if ($s == "contact") echo '<span class="page">contact</span>'."\n"; else echo '<a class="page" href="?id=contact">contact</a>'."\n";?>
			</div>
		</nav>

		<main>
<?php
				if (isset($pgs[$s]) && file_exists ("_p/".$pgs[$s])) {
					include_once ("_p/".$pgs[$s]);
				}
				echo "\n";
?>
		</main>
	</div>
		
	<footer>
		<a href="?id=presskit">Presskit</a> <span>&copy; Tolga Ay 2017</span>
		<a href="http://www.indiedb.com/games/naezith" title="View Remnants of Naezith on Indie DB" target="_blank"><img src="http://button.indiedb.com/popularity/medium/games/49414.png" alt="Remnants of Naezith"></a>
		<span title="Also indie ^-^">website by decldev</span>
		<span class="pb"></span>
	</footer>
</body>

</html>