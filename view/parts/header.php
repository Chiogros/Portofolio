<?php

$pages = array(
	["Accueil", "homepage.php"],
	["Projets", "projects.php"],
	["Curriculum Vitae", "cv.php"]
);

?>

<link rel="stylesheet" href="css/header.css">
<nav>
	<ul>
		<?php
		foreach ($pages as $page) { ?>
			<li><a href="<?= $page[1] ?>"><?= $page[0] ?></a></li>
		<?php } ?>
	</ul>
</nav>
